<?php
// Habilitar exibição de erros para debug
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Headers CORS e JSON
header('Access-Control-Allow-Origin: http://localhost:5173');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

// Configurar log de erros
$logFile = __DIR__ . '/php_error.log';
ini_set('log_errors', 1);
ini_set('error_log', $logFile);

error_log("Iniciando processamento da requisição");
error_log("Diretório atual: " . __DIR__);

// Verificar se o PHPMailer existe
$phpmailerPath = __DIR__ . '/PHPMailer/src/PHPMailer.php';
error_log("Verificando PHPMailer em: " . $phpmailerPath);

if (!file_exists($phpmailerPath)) {
    error_log("ERRO: PHPMailer não encontrado em: " . $phpmailerPath);
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Erro de configuração: PHPMailer não encontrado'
    ]);
    exit();
}

// Include PHPMailer files
$phpmailerDir = __DIR__ . '/PHPMailer/src/';
error_log("Incluindo arquivos do PHPMailer de: " . $phpmailerDir);

require_once $phpmailerDir . 'Exception.php';
require_once $phpmailerDir . 'PHPMailer.php';
require_once $phpmailerDir . 'SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

error_log("PHPMailer incluído com sucesso");

// Handle OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    echo json_encode(['status' => 'ok']);
    exit();
}

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Ler dados brutos
        $input = file_get_contents('php://input');
        error_log("Dados recebidos: " . $input);

        // Decodificar JSON
        $data = json_decode($input, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('Erro ao decodificar JSON: ' . json_last_error_msg());
        }

        error_log("JSON decodificado com sucesso");

        // Validar campos obrigatórios
        $required_fields = ['name', 'email', 'cep', 'typeE', 'typeR', 'message'];
        foreach ($required_fields as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                throw new Exception("Campo obrigatório não preenchido: {$field}");
            }
        }

        error_log("Campos validados com sucesso");

        // Criar mensagem HTML
        $message = "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                    color: #333;
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                }
                .container {
                    background-color: #f9f9f9;
                    border-radius: 5px;
                    padding: 20px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                }
                .field {
                    margin-bottom: 15px;
                    padding: 10px;
                    background-color: white;
                    border-radius: 4px;
                }
                .label {
                    font-weight: bold;
                    color: #2c3e50;
                    margin-bottom: 5px;
                }
                .value {
                    color: #34495e;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2 style='color: #2c3e50; margin-bottom: 20px;'>Novo Contato - Ecológica</h2>
                <div class='field'>
                    <div class='label'>Nome:</div>
                    <div class='value'>" . htmlspecialchars($data['name']) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'>" . htmlspecialchars($data['email']) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>CEP:</div>
                    <div class='value'>" . htmlspecialchars($data['cep']) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Tipo de Estabelecimento:</div>
                    <div class='value'>" . htmlspecialchars($data['typeE']) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Tipo de Resíduo:</div>
                    <div class='value'>" . htmlspecialchars($data['typeR']) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Mensagem:</div>
                    <div class='value'>" . nl2br(htmlspecialchars($data['message'])) . "</div>
                </div>
            </div>
        </body>
        </html>";

        error_log("Mensagem HTML criada com sucesso");

        // Criar uma nova instância do PHPMailer
        error_log("Criando instância do PHPMailer");
        $mail = new PHPMailer(true);
        error_log("Instância do PHPMailer criada com sucesso");

        // Configurar servidor SMTP
        error_log("Configurando servidor SMTP");
        $mail->SMTPDebug = 0; // Desabilitar debug output
        $mail->isSMTP();
        $mail->Host = getenv('SMTP_HOST'); // Substituído por variável de ambiente
        $mail->SMTPAuth = true;
        $mail->Username = getenv('SMTP_USER'); // Substituído por variável de ambiente
        $mail->Password = getenv('SMTP_PASS'); // Substituído por variável de ambiente
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        error_log("Configuração SMTP concluída");

        // Configurar destinatários
        error_log("Configurando destinatários");
        $mail->setFrom(getenv('SMTP_USER'), 'Ecológica'); // Substituído por variável de ambiente
        $mail->addAddress(getenv('RECEIVER_EMAIL')); // Substituído por variável de ambiente
        $mail->addReplyTo($data['email'], $data['name']);
        error_log("Destinatários configurados");

        // Configurar conteúdo
        error_log("Configurando conteúdo do email");
        $mail->isHTML(true);
        $mail->Subject = "Novo contato de " . $data['name'];
        $mail->Body = $message;
        $mail->AltBody = strip_tags($message); // Versão em texto plano
        error_log("Conteúdo configurado");

        // Enviar email
        error_log("Tentando enviar email");
        $mail->send();
        error_log("Email enviado com sucesso");

        echo json_encode([
            'status' => 'success',
            'message' => 'Email enviado com sucesso!'
        ]);

    } catch (Exception $e) {
        error_log("Erro detalhado: " . $e->getMessage());
        error_log("Stack trace: " . $e->getTraceAsString());
        http_response_code(500);
        echo json_encode([
            'status' => 'error',
            'message' => 'Erro ao enviar email: ' . $e->getMessage()
        ]);
    }
} else {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Método não permitido'
    ]);
}

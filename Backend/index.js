require('dotenv').config(); // Carrega as variáveis do .env
const express = require('express');
const nodemailer = require('nodemailer');
const cors = require('cors');

const app = express();

// Middleware
app.use(cors());
app.use(express.json());

// Rota para enviar e-mail
app.post('/send-email', async (req, res) => {
  const { name, email, message, cep, typeE, typeR } = req.body;

  if (!name || !email || !message || !cep || !typeE || !typeR) {
    return res.status(400).json({ error: 'Todos os campos são obrigatórios.' });
  }

  const transporter = nodemailer.createTransport({
    service: 'Gmail',
    auth: {
      user: process.env.EMAIL, // Substituído por variável de ambiente
      pass: process.env.PASSWORD, // Substituído por variável de ambiente
    },
  });

  try {
    await transporter.sendMail({
      from:`"Ecológica" <${process.env.EMAIL}>`, // Substituído por variável de ambiente
      to: process.env.RECEIVER_EMAIL, // Substituído por variável de ambiente
      subject: `Novo contato de ${name}`, // Assunto do Email
      html: `
      <html>
        <head>
          <style>
            /* Estilos gerais */
            body {
              font-family: Arial, sans-serif;
              margin: 0;
              padding: 0;
              background-color: #f9f9f9;
            }
            .email-container {
              width: 100%;
              max-width: 600px;
              margin: 0 auto;
              padding: 20px;
              background-color: #ffffff;
              border-radius: 8px;
              box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
              color: #4CAF50;
              text-align: center;
            }
            .email-content {
              padding: 20px;
              background-color: #f3f3f3;
              border-radius: 8px;
            }
            .email-content p {
              font-size: 16px;
              line-height: 1.5;
              color: #333;
            }
            .email-content strong {
              color: #4CAF50;
            }
            .footer {
              margin-top: 20px;
              text-align: center;
              font-size: 12px;
              color: #777;
            }
          </style>
        </head>
        <body>
          <div class="email-container">
            <h2>Informações do Contato</h2>
            <div class="email-content">
              <p><strong>Nome:</strong><br> ${name}</p>
              <p><strong>Email:</strong><br> ${email}</p>
              <p><strong>Cep:</strong><br> ${cep}</p>
              <p><strong>Tipo de Estabelecimento:</strong><br> ${typeE}</p>
              <p><strong>Tipo de Resíduo:</strong><br> ${typeR}</p>
              <p><strong>Mensagem:</strong><br> ${message}</p>
            </div>
            <div class="footer">
              <p>Este é um e-mail automático. Não responda.</p>
            </div>
          </div>
        </body>
      </html>
    `
    });

    res.status(200).json({ message: 'Email enviado com sucesso!' });
  } catch (error) {
    console.error(error);
    res.status(500).json({ error: 'Erro ao enviar email.' });
  }
});

// Inicializa o servidor
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Servidor rodando na porta ${PORT}`);
});

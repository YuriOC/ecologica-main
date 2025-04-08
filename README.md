# 🌱 Website Ecológica

> Site para a empresa Ecológica, totalmente responsivo, com função de fornecer informações sobre a empresa e possibilitar o contato através de links ou envio de emails. Dividido em componentes com Vue.js e função de envio de emails com PHP.

---

## 🚀 Funcionalidades

- ✅ Responsivo para desktop e mobile
- 🔐 Formulário com envio por e-mail
- 📁 Organização de pastas por componentes reutilizáveis

---

## 🛠️ Tecnologias utilizadas

- HTML
- CSS
- JavaScript
- Vue.js
- PHP

---

## 🧪 Como rodar localmente

```bash
# Clone o repositório
git clone https://github.com/seu-usuario/seu-repo.git

# Acesse a pasta
cd seu-repo

# Instale as dependências
npm install

# Rode o servidor (Frontend)
npm run dev  
```
## ⚙ Configure o Backend para envio de e-mails

1. Instale o XAMPP (ou outro servidor local com suporte a PHP).

2. Crie uma pasta no diretório htdocs do XAMPP (ex: C:\xampp\htdocs\ecologica-backend).

3. Copie os arquivos da pasta backend do projeto para essa nova pasta.

4. Crie um arquivo .env na pasta config com o seguinte conteúdo:
```
SMTP_HOST=smtp.gmail.com (Se for gmail, ou smtp.office365.com se for outlook)

SMTP_USER=seuemail@gmail.com (O email que enviará a mensagem)

SMTP_PASS=sua_senha_de_app (A senha de app do seu email *Não é sua senha de login!!!*)

SMTP_PORT=587 

SMTP_ENCRYPTION=tls

SMTP_FROM_EMAIL=seuemail@gmail.com (Email que enviará a mensagem)

SMTP_FROM_NAME=Nome do remetente (Para evitar span e melhor organização)

RECEIVER_EMAIL=seuemail@gmail.com (o email que receberá a mensagem)

⚠️ Importante:

! Use uma senha de app do Gmail para SMTP, e nunca compartilhe esse arquivo .env publicamente.

! Certifique-se que seu arquivo .env está dentro do .gitignore antes de compartilhar publicamente.

! Substitua os valores pelos seus dados reais.
```
5. Inicie o Apache no XAMPP e envie o formulário.

---



## 📫 Contato

GitHub: [@YuriOC
](https://github.com/YuriOC)

E-mail: yuri.ocardos@gmail.com

## 📝 Licença

MIT License

Copyright (c) 2025 Yuri Oliveira

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.



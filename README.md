# 🌱 Ecológica Website

> Website for the Ecológica company, fully responsive, designed to provide company information and enable contact through links or email submission. Built with Vue.js components and email sending functionality using PHP.

---

## 🚀 Features

- ✅ Responsive for desktop and mobile
- 🔐 Contact form with email sending
- 📁 Folder organization with reusable components

---

## 🛠️ Technologies Used

- HTML
- CSS
- JavaScript
- Vue.js
- PHP

---

## 🧪 How to Run Locally (Frontend)

```bash
# Clone the repository
git clone https://github.com/YuriOC/site_ecologica.git

# Enter the folder
cd site_ecologica/Frontend

# Install dependencies
npm install

# Run the frontend server
npm run dev   
```
## ⚙ Set Up the Backend for Email Sending

> When a user submits the contact form, the information is sent and received via email configured by the company.
---

1. Install XAMPP (or another local server with PHP support).

2. Create a folder inside the htdocs directory of XAMPP (e.g.: C:\xampp\htdocs\ecologica-backend).

3. Copy the contents of the backend folder from the project into this new folder.

4. Create a .env file inside the config folder with the following content:
```
SMTP_HOST=smtp.gmail.com (Se for gmail, ou smtp.office365.com se for outlook)

SMTP_USER=seuemail@gmail.com (O email que enviará a mensagem)

SMTP_PASS=sua_senha_de_app (A senha de app do seu email *Não é sua senha de login!!!*)

SMTP_PORT=587 

SMTP_ENCRYPTION=tls

SMTP_FROM_EMAIL=seuemail@gmail.com (Email que enviará a mensagem)

SMTP_FROM_NAME=Nome do remetente (Para evitar span e melhor organização)

RECEIVER_EMAIL=seuemail@gmail.com (o email que receberá a mensagem)

SMTP_HOST=smtp.gmail.com (Use smtp.office365.com if you're using Outlook)

SMTP_USER=youremail@gmail.com (The email that will send the message)

SMTP_PASS=your_app_password (Your app-specific password *Not your email login password!*)

SMTP_PORT=587 

SMTP_ENCRYPTION=tls

SMTP_FROM_EMAIL=youremail@gmail.com (The sender email)

SMTP_FROM_NAME=Sender Name (To avoid spam and for better organization)

RECEIVER_EMAIL=youremail@gmail.com (The email that will receive the message)
```
### ⚠️ **WARNING** ⚠️

! If you're sharing this project, use `.gitignore` to protect the `.env` file from being tracked.

! Use an app-specific password for Gmail SMTP, and **NEVER** share your `.env` file publicly.

! Replace all placeholder values with your actual data.

! Any changes should be made inside the XAMPP folder.

---

5. Start Apache in XAMPP and submit the contact form.

## 📫 Contact

GitHub: [@YuriOC
](https://github.com/YuriOC)

E-mail: yuri.ocardos@gmail.com

## 📝 License

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



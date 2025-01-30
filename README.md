<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# Laravel Authentication System 🔒  
A **secure and fully functional authentication system** built with Laravel, Blade templates, and MySQL.  
This project provides user registration, login, password reset, email verification, and role-based authentication.

---

## ✨ Features  
✅ **User Registration & Login**  
✅ **Email Verification**  
✅ **Password Reset**  
✅ **Role-Based Authentication (Admin & User)**  
✅ **Session-Based Authentication**  
✅ **Fully Responsive UI (Blade Templates)**  
✅ **Middleware for Access Control**  

---

## 🚀 Installation  

### Prerequisites  
- PHP >= 8.1  
- Composer  
- Node.js & npm  
- MySQL  

### Steps  

1. **Clone the Repository**  
   ```sh
   git clone https://github.com/username/laravel-auth-system.git
   cd laravel-auth-system
   
Install Dependencies
```
composer install
npm install && npm run build
Setup Environment

Copy the example environment file and configure your database and email settings:
cp .env.example .env
Database Configuration (.env file)



DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
Email Configuration (.env file - for email verification & password reset)


MAIL_MAILER=smtp
MAIL_HOST=smtp.yourmailserver.com
MAIL_PORT=587
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS="your_email@example.com"
MAIL_FROM_NAME="Your App Name"
Generate Application Key


php artisan key:generate
Run Migrations

```

Start the Application

php artisan serve
🔑 Authentication Flow
User Registration: Users can sign up and receive an email verification link.
Login System: Secure authentication with session handling.
Email Verification: Users must verify their email before accessing certain features.
Password Reset: Users can reset their password via email.
Role-Based Access: Admin and user roles with middleware-based access control.

📂 Project Structure
📦 laravel-auth-system  
 ┣ 📂 app/Http/Controllers/Auth  
 ┃ ┣ 📜 LoginController.php  
 ┃ ┣ 📜 RegisterController.php  
 ┃ ┣ 📜 ResetPasswordController.php  
 ┃ ┗ 📜 VerifyEmailController.php  
 ┣ 📂 resources/views/auth  
 ┃ ┣ 📜 login.blade.php  
 ┃ ┣ 📜 register.blade.php  
 ┃ ┣ 📜 password-reset.blade.php  
 ┃ ┗ 📜 verify-email.blade.php  
 ┣ 📜 routes/web.php  
 ┗ 📜 .env.example  
🚀 Contributing

Pull requests and contributions are welcome! Follow these steps:
Fork the repository
Create a new branch (feature/new-feature)
Commit changes
Push to your fork and create a Pull Request
📄 License
This project is licensed under the MIT License.

 ## Support My Work

If you find this project useful, please consider supporting me through [GitHub Sponsors](https://github.com/sponsors/Abdelmonem-Dev). Your support helps me dedicate more time to maintaining and improving this project.

[![Sponsor](https://img.shields.io/badge/-Sponsor-red?style=flat&logo=GitHub%20Sponsors)](https://github.com/sponsors/Abdelmonem-Dev)

❤️ Support My Work
If you found this project useful, please consider supporting me through GitHub Sponsors!


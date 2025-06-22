# Burger-Ordering-App Project using PHP and MySQL

## What this project does

- Lets users **register** for an account (username and password)
- Lets users **log in** with their account
- Lets logged-in users **order burgers** and see the total price

---

## How to set up

1. **Clone the project** from GitHub.
2. **Start XAMPP** (Apache and MySQL).
3. **Create the database and table:**
   - Open [phpMyAdmin](http://localhost/phpmyadmin)
   - Run this SQL:
     ```sql
     CREATE DATABASE IF NOT EXISTS myproject;
     USE myproject;
     CREATE TABLE IF NOT EXISTS users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) NOT NULL,
         password VARCHAR(255) NOT NULL
     );
     ```

4. **Put the project files** in your XAMPP `htdocs` folder.(optional for linux users if it doesnt work by default!)

---

## How to use

- **Register:**  
  Go to `register.php` 
  Fill in a username and password.  
  You can’t register with empty fields.

![Screenshot From 2025-06-22 21-32-20](https://github.com/user-attachments/assets/2b0bb83e-a7a7-4fc1-8f37-a55b9e4c6db6)
![Screenshot From 2025-06-22 21-32-37](https://github.com/user-attachments/assets/483084bf-b32d-4758-a0dd-b85c8afa32c7)

- **Login:**  
  Go to `login.php`.  
  Enter your username and password.  
  If you log in successfully, you’ll be sent to the order page.  
  If login fails, you’ll see a message and a button to register.

![Screenshot From 2025-06-22 21-32-43](https://github.com/user-attachments/assets/04ab0a9e-8991-47cc-bd60-df7df4fa6ab3)
![Screenshot From 2025-06-22 21-32-48](https://github.com/user-attachments/assets/d695858e-1406-46d0-8410-e8dc2be8098f)


- **Order:**  
  Go to `order.php` (or you’ll be sent there after login).  
  Enter how many burgers you want.  
  It will show you the total price.

![Screenshot From 2025-06-22 21-33-03](https://github.com/user-attachments/assets/924d8154-6cfe-4e94-be63-7c7f33b990d6)
![Screenshot From 2025-06-22 21-33-08](https://github.com/user-attachments/assets/168fd0f6-486a-4ee1-92a1-9c1d77a0f9f0)
![Screenshot From 2025-06-22 21-33-18](https://github.com/user-attachments/assets/9377850a-d4e3-4b06-9685-109ca0e01377)
![Screenshot From 2025-06-22 21-33-26](https://github.com/user-attachments/assets/76966c9c-a65a-4b45-b774-aaf26141bc30)

---

## Features

- **Validation:**  
  You can’t submit empty fields when registering or logging in.
- **Navigation:**  
  Buttons let you go from register to login and vice versa.
- **Database:**  
  User info is saved in a MySQL database.

---

## File List

- `register.php` — user registration
- `login.php` — user login
- `order.php` — order burgers

---

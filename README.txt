T# Burger Order Project using PHP and MySQL

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

4. **Put the project files** in your XAMPP `htdocs` folder.

---

## How to use

- **Register:**  
  Go to `signup.php` (or `register.php` if you kept that name).  
  Fill in a username and password.  
  You can’t register with empty fields.


- **Login:**  
  Go to `login.php`.  
  Enter your username and password.  
  If you log in successfully, you’ll be sent to the order page.  
  If login fails, you’ll see a message and a button to register.

- **Order:**  
  Go to `order.php` (or you’ll be sent there after login).  
  Enter how many burgers you want.  
  It will show you the total price.

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

- `signup.php` or `register.php` — user registration
- `login.php` — user login
- `order.php` — order burgers

---

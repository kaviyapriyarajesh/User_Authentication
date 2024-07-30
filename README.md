
# Authentication System

This project provides a basic authentication system using PHP, MySQL, and JSON Web Tokens (JWT). It allows users to register, log in, and receive a JWT for authentication purposes. The system does not implement role-based access control.

## Project Structure

```
auth_system/
├── config.php
├── index.html
├── register.html
├── login.html
├── register.php
├── login.php
├── styles.css
├── vendor/
└── composer.json
```

## Prerequisites

1. **PHP**
2. **Composer** (PHP dependency manager)
3. **MySQL** database
4. **XAMPP** (or another local server environment)

## Installation and Setup

### 1. Install Composer and Dependencies

Make sure Composer is installed. Navigate to the `auth_system` directory and run:

```bash
composer require firebase/php-jwt
```

This command will install the JWT library and create the `vendor` directory.

### 2. Database Configuration

Create a MySQL database and a `users` table:

```sql
CREATE DATABASE auth_system;
USE auth_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
```

## Testing the System

### 1. Register a New User

- Open `register.html` in a browser.
- Fill in the form with a username and password.
- Submit the form to create a new user.

### 2. Log in with an Existing User

- Open `login.html` in a browser.
- Enter the registered username and password.
- Submit the form to log in and receive a JWT.

### 3. View the Token

- The token will be displayed on the page after logging in.



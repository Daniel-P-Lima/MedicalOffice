# 🚀 Project: Online Medical Office <br/> (PROJECT UNDER DEVELOPMENT)

Welcome to the **Online Medical Office** project! This web system was developed to manage user access to new appointments, check appointments, and more.

## 📝 About the Project

This project implements the basic concepts of MySQL, including **Create**, **Read**, **Update** and **Delete** (CRUD) operations. PHP with PDO (PHP Data Objects) was used to securely and efficiently connect the front-end to the back-end.

To ensure user data security, JavaScript is used to generate a **hash** of passwords before storing them in the database. This ensures that even in case of unauthorized access to the database, the passwords will be protected.

## 🚧 Main Features

- **User Registration**: Allows new users to register in the system.
- **Authentication**: Secure login with hashed credential verification.
- **Data Management**: CRUD operations to handle information in the database.
- **Responsive Interface**: Use of Bootstrap to ensure compatibility with various devices.

## ☕ Technologies Used

- **HTML/CSS with Bootstrap**: Development of user-friendly and responsive web interfaces.
- **PHP**: Scripting language for back-end development.
- **MySQL**: Relational database for information storage.
- **JavaScript**: Front-end functionality, password security implementation and date validation.

## 💻 Tools Used

- **Visual Studio Code**: Integrated development environment (IDE).
- **XAMPP**: Platform providing Apache, PHP, and MySQL servers.
- **DBeaver**: Universal tool for database management.
- **Bootstrap**: Front-end framework for responsive design.

## 📦 How to Install and Run the Project

1. **Clone the Repository**

   ```bash
   git clone https://github.com/Daniel-P-Lima/hospital.git
   ```

2. **Set Up the Environment**

   - Install XAMPP and start the Apache and MySQL modules.
   - Use DBeaver or phpMyAdmin to create the necessary database.
   - Import the `database.sql` file provided in the repository to create the tables.

3. **Configure Credentials**

   - Inside the /php directory, there is a `conexao.php` file where the database credentials are set.
   - This file must also be imported in each file, but it is already included using `require_once()`.
   - For example:

   ```php
   $host = "localhost";
   $db = "consultorio_medico";
   $user = "root";
   $pass = "";
   $charset = "utf8mb4";
   ```

4. **Start the Application**

   - Move the project to the `htdocs` folder of XAMPP.
   - Access `http://localhost/your-project` in your browser.

## 📖 How to Use

- **Registration and Login**: Create an account and log in to access features.
- **Management**: Use CRUD operations to manage data as needed.
- **Navigation**: The intuitive interface allows easy access to all functionalities.

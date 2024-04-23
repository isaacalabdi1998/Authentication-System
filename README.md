# PHP Authentication System with MySQL

This project showcases a basic authentication system using PHP and MySQL. It allows users to register, login, and logout.

## Features
- PHP: Backend scripting language.
- MySQL: Database management system.
- HTML, CSS, Bootstrap: Frontend for user interfaces.

## Setup
- Clone the repository.
- Set up a local server with PHP and MySQL.
- Import loginapp.sql into your MySQL database.
- Update db_connection.php with your MySQL credentials.
- Navigate to the project directory and start the server.

## Usage
- Visit index.php to access the main interface.
- Use login.php to log in.
- Use register.php to create an account.
- Use logout.php to log out.


## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup](#setup)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

In this project, we've created a basic authentication system to manage user authentication in a web application. It allows users to register for an account, log in with their credentials, and log out when they're done.

## Features

- User registration: Users can create a new account by providing a username, email, and password. The password is securely hashed before storing it in the database.
- User login: Registered users can log in using their username and password. The system verifies the credentials against the database and grants access if they are correct.
- User logout: Users can log out of their account, ending their current session.

## Technologies Used

- PHP: Server-side scripting language used for backend development.
- MySQL: Relational database management system used to store user data.
- HTML, CSS, Bootstrap: Frontend technologies used to create user interfaces and styles.

## Setup

To run this project locally, follow these steps:

1. Clone the repository to your local machine.
2. Set up a local web server environment with PHP and MySQL installed.
3. Import the `loginapp.sql` file into your MySQL database to create the necessary tables.
4. Update the database connection settings in `db_connection.php` with your MySQL credentials.
5. Navigate to the project directory in your terminal and start the local server.
6. Access the project in your web browser.

## Usage

Once the setup is complete and the project is running, you can:

- Visit the `index.php` page to see the main interface, which displays options for login or registration.
- Use the `login.php` page to log in with existing credentials.
- Use the `register.php` page to create a new user account.
- Use the `logout.php` page to log out of the current session.

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please fork the repository and submit a pull request with your changes.

## License

This project is licensed under the [MIT License](LICENSE).

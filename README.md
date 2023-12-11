# User System Project
This project is a simple user system implementation using PHP, MySQL, and HTML/CSS. It includes user registration, login functionality, and a basic welcome page. The project uses the Kitchen Std font and a background image for aesthetics.

## Features

- User registration with email, username, and password validation.
- Check for existing email and username during registration to prevent duplicates.
- Secure password storage using the MD5 hash function.
- User login with validation and session management.
- Responsive design for various screen sizes.

## Prerequisites

- Web server (e.g., Apache or Nginx)
- PHP
- MySQL database

## Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/userSystem.git
   
2. Import the database schema from the database.sql file.

3. Update db_config.php with your database connection details.

4. Serve the project using a local server or deploy it to a web server.

## Usage
1. Open the project in your web browser.

2. Navigate to the registration page and create a new account.

3. After registration, you can log in with your credentials.

4. Upon successful login, you will be redirected to the welcome page.

## Structure
1. index.php: Main file containing the registration and login forms.
2. welcome.php: Welcome page for logged-in users.
3. db_config.php: Configuration file for database connection.
4. scripts.js: JavaScript file for additional client-side functionality.
5. style.css: Stylesheet for the project's visual appearance.
   
## Contributing
Contributions are welcome! If you have suggestions or improvements, feel free to submit a pull request.

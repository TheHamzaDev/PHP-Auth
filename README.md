# PHP and MySQL User Authentication System
This is a simple web application that allows users to register and login using PHP and MySQL. The application uses HTML, CSS and Bootstrap for the front-end design, and XAMPP for the local server environment.

## Features
* User registration form with basic validation
* User login form with session management
* User profile page with account details
* User logout script
  
## Requirements
* PHP 8.0 or higher
* MySQL 8.0 or higher
* XAMPP 8.0 or higher
  
## Installation
To install and run this application on your local machine, follow these steps:

* Download and install XAMPP from here.
* Start the Apache and MySQL modules from the XAMPP Control Panel.
* Create a database named auth. You can use the SQLcode found in 'db.sql'.

Download or clone this repository from GitHub and copy the files to the htdocs folder of your XAMPP installation directory (e.g., C:\xampp\htdocs).
Edit the config.php file and change the database credentials according to your MySQL server setting.
Open your web browser and go to http://localhost/phplogin to access the application.
Usage
To use this application, you can either register a new account or login with an existing one. The default username and password for testing are admin and password.

To register a new account, click on the Register link on the login page and fill out the form with your username and password. You can also optionally enter your email address. Click on the Submit button to create your account and login automatically.
To login with an existing account, enter your username and password on the login page and click on the Login button. You will be redirected to the home page where you can see a welcome message and a link to your profile page.
To view your profile page, click on the Profile link on the home page or the navigation bar. You will see your account details, such as your username, email, and registration date.
To logout from the application, click on the Logout link on the navigation bar. You will be redirected to the login page and your session will be destroyed.

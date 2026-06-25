# UniData
A web-based university student registry system built with PHP, HTML, CSS and MySQL.

About

UniData is a full-stack web application that simulates a university information system, allowing students and professors to register, log in, and access their profile pages based on their role.

Features


1) Student Registration — Sign up with first name, last name, email and password
2) Professor Registration — Sign up with role selection (Assistant / Substitute / Professor)
3) Secure Authentication — Passwords are hashed using PHP's password_hash()
4) Input Validation — Server-side checks for empty fields, invalid names/emails, duplicate emails and password matching
5) Role-based Access — Different views for students, professors and visitors
6) MySQL Database — Data stored in a relational database via MySQLi with prepared statements


Tech Stack

TechnologyUsagePHPBackend logic & server-side renderingHTMLPage structureCSSStylingMySQLDatabaseMySQLiDatabase connection with prepared statements

Project Structure

UniData/
├── index.php             # Entry point
├── index.html            # Landing page
├── login.php             # Login page
├── login.html
├── signup.php            # Student registration
├── signup2.php           # Professor registration
├── profile.php           # User profile page
├── student.html          # Student view
├── visitor.html          # Visitor view
├── style.css             # Stylesheet
├── header.php            # Shared header
├── footer.php            # Shared footer
└── includes/
    ├── functions.inc.php  # Core validation & DB functions
    ├── login.inc.php      # Login handler
    ├── signup.inc.php     # Student signup handler
    ├── signup2.inc.php    # Professor signup handler
    └── dbh.inc.php        # Database connection

Setup & Installation

Requirements


PHP 7.4+
MySQL
Apache (XAMPP / WAMP / MAMP or similar)


Steps


Clone the repository:


bash   git clone https://github.com/athensicsd/UniData.git


Move the project folder to your server's root directory (e.g. htdocs for XAMPP)
Create a MySQL database named first_db and import the schema
Configure your database credentials in includes/dbh.inc.php:


php   $serverName = "localhost";
   $dbUsername = "your_username";
   $dbPwd = "your_password";
   $dbName = "first_db";


Start Apache and MySQL, then navigate to http://localhost/UniData


Notes
!! The file: includes/dbh.inc.php is excluded from this repository for security reasons. Use the setup instructions above to configure your own database connection.




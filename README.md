# Hotel Management System

This is a **Hotel Management System** developed using PHP, HTML, CSS, and JavaScript. It allows for the management of hotel reservations, rooms, and user data, providing basic CRUD (Create, Read, Update, Delete) operations, a login system, and more.

### Features

- User Registration and Login System
- Room Reservation System with CRUD Operations
- Basket Management for Reservations
- Room Cost Calculation
- Image Gallery of Rooms and Services
- Admin functionalities to manage rooms and reservations
- User logout and session management

### Technologies Used

- **PHP**: Backend logic and database interaction.
- **MySQL**: Database to store users, rooms, reservations, and other data.
- **HTML/CSS**: Frontend structure and styling.
- **JavaScript**: Client-side interactions and form handling.
- **JSON**: Data management for room details.

### Set Up a Local Web Server

This project is built with PHP, so you'll need a local web server to run it. You can use software like XAMPP, WAMP, or MAMP. 

### Installation
1. Clone the repository.
    ```bash
    git clone https://github.com/username/repository-name.git

2. The project uses a MySQL database, so you'll need to create a database and import the necessary tables. Follow these steps:

Open phpMyAdmin by visiting **http://localhost/phpmyadmin** in your browser.

Create a new database that matches the expected database name in the project.

If a SQL file is provided (e.g., database.sql), import it into your newly created database:

Click on the database you created.
Go to the **Import** tab.
Upload the provided **.sql** file and click **Go**.
Make sure the database connection details **(host, username, password, database name)** in **db/conn.php** are correct and reflect your local setup.

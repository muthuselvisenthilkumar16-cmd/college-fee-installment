# College Fee Installment Planner

## 1. Project Title and Short Description

The **College Fee Installment Planner** is a web-based application developed to manage student details and organize college fee payments through installment plans. It allows users to register students, save fee plan information, and view fee-related details through a dashboard.

The application is developed using PHP, MySQL, HTML, CSS, and JavaScript and can be run locally using XAMPP.

## 2. Main Features

- **Student Registration:** Add and save student details.
- **Fee Installment Planning:** Create fee installment plans for students.
- **Student Data Management:** Store student information in a MySQL database.
- **Fee Plan Management:** Save and manage fee plan details.
- **Dashboard:** View available student and fee-related information.
- **Form Validation:** Validate input fields using PHP and JavaScript.
- **Database Connectivity:** Connect the application to the MySQL database.
- **Simple User Interface:** Provide easy-to-use pages for student and fee management.

## 3. Technologies / Tech Stack

| Technology | Purpose |
|---|---|
| HTML | Creates the structure of web pages |
| CSS | Styles the application |
| JavaScript | Provides client-side validation and interaction |
| PHP | Handles server-side processing |
| MySQL | Stores student and fee plan information |
| XAMPP | Provides the local Apache and MySQL environment |
| Visual Studio Code | Used to write and edit code |
| Git and GitHub | Used for version control and project hosting |

## 4. Installation and Setup Instructions

### Prerequisites

Install the following software:

- XAMPP
- Visual Studio Code
- A web browser
- Git (optional, for cloning the repository)

### Step 1: Clone the Repository

Open Command Prompt or the VS Code terminal and execute:

```bash
git clone https://github.com/muthuselvisenthilkumar16-cmd/college-fee-installment.git
```

### Step 2: Move the Project to XAMPP

Place the project folder inside the XAMPP `htdocs` directory.

Example path:

```text
C:\xampp_new\htdocs\college-fee-installment
```

### Step 3: Start Apache and MySQL

1. Open the XAMPP Control Panel.
2. Start Apache.
3. Start MySQL.
4. Confirm that both services are running.

### Step 4: Create the Database

1. Open `http://localhost/phpmyadmin/` in your browser.
2. Create a database named `college_fee_planner`.
3. Create or import the required database tables: `students` and `fee_plans`.
4. Ensure the table columns match the queries used in the PHP files.

If you have an SQL database export, import it into `college_fee_planner`.

### Step 5: Configure the Database Connection

Open `db.php` and configure the connection for your local MySQL server.

Typical local XAMPP settings are:

```php
$host = "localhost";
$username = "root";
$password = "";
$database = "college_fee_planner";
```

Use the settings that match your own MySQL configuration.

### Step 6: Open the Application

Visit the following URL in your browser:

`http://localhost/college-fee-installment/`

The project should open on its home page.

## 5. How to Run and Use the Project

### Running the Project

1. Open the XAMPP Control Panel.
2. Start Apache and MySQL.
3. Make sure the `college_fee_planner` database exists and is configured correctly.
4. Open your browser.
5. Navigate to `http://localhost/college-fee-installment/`.

### Using the Application

1. Open the home page.
2. Navigate to the Student Registration page.
3. Enter the required student details and save the information.
4. Open the Fee Installment Planner.
5. Enter the required fee plan details and save the plan.
6. Open the Dashboard to view the available student and fee-related information.

The available fields and operations depend on the current implementation of the application.

### Environment Variables and Configuration Placeholders

The application currently uses a PHP database connection file, `db.php`. If environment variables are configured for deployment in the future, use placeholders such as the following:

```text
DB_HOST=<your_database_host>
DB_USERNAME=<your_database_username>
DB_PASSWORD=<your_database_password>
DB_NAME=college_fee_planner
```

These are **example configuration names only**. They are not necessarily read by the current application. The project must be updated to load environment variables before these values can be used.

Never commit actual passwords, private credentials, or secret values to GitHub. Keep local configuration and database backup files out of the public repository.

### Deployment Status

**Status: Not deployed yet.**

The application is currently intended to run locally using XAMPP. A live website link will be added after the project is deployed and tested successfully.

## 6. Screenshots

### Home Page

![College Fee Installment Planner Home Page](https://github.com/user-attachments/assets/dcaaee22-40a3-4a3c-a866-4b8236033faa)

###Registration Page
![Student Registration Page](screenshots/student-registration.png)


###Installment Page
![Fee Installment Planner Page](screenshots/fee-planner.png)


###Dashboad Page
![Dashboard](screenshots/dashboard.png)


## 7. Live Deployment Link

**Deployment Status:** Not deployed yet.

**Live Website:** To be added after successful deployment.

The project currently runs locally using XAMPP. A live deployment URL will be provided once online hosting is completed.

## 8. Student Details

- **Student Name:** MUTHUSELVI
- **Roll Number:** [19031]
- **Project Title:** College Fee Installment Planner

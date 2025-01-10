# Project Management System

A web-based project management system designed for teams to collaborate on tasks and projects. This system allows users to create projects, assign tasks, and manage workflows efficiently.

### Key Features:
#### For All Users:
- **Modern User Interface**: A clean, modern design for an intuitive and engaging user experience.
- **Secure Authentication**: Safe and secure user login and registration.
- **Public Projects**: Access and view public projects with ease.
- **Contact Support**: Reach out via a user-friendly contact form.
- **About Section**: Detailed information about the platform and its features.

#### For Project Managers:
- **Project Creation & Management**: Create, update, and manage projects efficiently.
- **Task Assignment**: Assign tasks to team members based on their responsibilities.
- **Progress Tracking**: Monitor the progress of projects with real-time updates.
- **Team Management**: Add or remove team members and manage their roles.
- **Project Reports**: Generate detailed reports for better decision-making.

#### For Team Members:
- **Join Projects**: Easily join existing projects to collaborate.
- **Task Management**: View and update assigned tasks, track your personal progress.
- **Team Collaboration**: Communicate and work with team members seamlessly.

## Technologies Used
- **PHP**
- **MySQL**
- **HTML5**
- **Tailwind CSS**
- **Alpine.js**
- **Font Awesome Icons**

## Prerequisites
Before you begin, ensure that your system meets the following requirements:
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- Composer (for dependency management)

## Installation
To get started with Protask, follow the steps below:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Youcode-Classe-E-2024-2025/zakariae_el_hassad_Project.git
2. **Configure Your Database**:
- Create a new MySQL database.
- Update the database configuration in `config/DatabaseConnection.php` with your credentials.

3. **Import the Database Schema**:
- Use the SQL file located in the `database` directory to set up the database schema.

4. **Configure Your Web Server**:
- Point your web server to the root directory of the project.
- Ensure that the appropriate permissions are set for the web server.

## UML Class Diagram
For an overview of the system's structure, refer to the class diagram [here](https://lucid.app/lucidchart/edd34715-e6bc-4b01-85cb-b2a20acc26ef/edit?invitationId=inv_44d2061e-3a63-416c-9fb8-d7cb0e9ad75e&page=0_0#).

## Usage
Once everything is set up, follow these steps to start using Protask:

1. **Access the application**: Open the app in your web browser.
2. **Register a new account**: Create your account by registering your details.
3. **Log in**: Use your credentials to log in.

### Role-based features:
- **Project Managers**: Create and manage projects, assign tasks, and generate reports.
- **Team Members**: Join projects, manage tasks, and track personal progress.

## Security Features:
Protask ensures the safety and security of user data through the following features:
- **Password Hashing**: Secure password storage and management.
- **Session Management**: Safe handling of user sessions.
- **Input Validation**: Validation of user inputs to prevent invalid or malicious data.
- **XSS Protection**: Protection against cross-site scripting attacks.
- **CSRF Protection**: Safeguards against cross-site request forgery.

## Acknowledgments:
We would like to acknowledge the following technologies for their contribution to making Protask a powerful project management tool:
- **Tailwind CSS**: A utility-first CSS framework that helps in designing responsive UIs.
- **Alpine.js**: A minimal framework for composing JavaScript behavior in the HTML.
- **Font Awesome**: A toolkit for icons and symbols that enhance the user interface.
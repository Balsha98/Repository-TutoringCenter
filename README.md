# TutoringCenter - Tutoring Database Web Application

A web application for facilitating tutoring sessions between tutors and students. Features role-based access control and session management capabilities.

## Features

-   **Role-Based Access** - Separate interfaces for tutors and students.
-   **User Authentication** - Secure login and registration system.
-   **Profile Management** - Personalized user profiles for both roles.
-   **Session View** - Schedule and view tutoring sessions (prototype).
-   **Reports Dashboard** - Tutor-exclusive analytics and reporting.
-   **Session Scheduling** - Book and manage tutoring appointments (in development).

## User Roles & Access

### Students

-   **Profile View** - Manage personal information and preferences.
-   **Sessions View** - Schedule, view, and manage tutoring sessions.

### Tutors

-   **Profile View** - Manage professional information and availability.
-   **Sessions View** - View, schedule, and manage sessions with students.
-   **Reports View** - Access analytics, session history, and performance metrics.

### Administrators (Future Update)

-   Full system access and control.
-   User management capabilities.
-   System-wide analytics and oversight.

## Tech Stack

-   **PHP** - Server-Side Logic & Backend
-   **MySQL** - Database Management
-   **HTML5** - Structure & Content
-   **CSS3** - Styling & Layout
-   **JavaScript** - Client-Side Interactivity
-   **jQuery** - DOM Manipulation & AJAX Requests

## Installation

### Prerequisites

-   PHP 7.4 or higher.
-   MySQL 5.7 or higher.
-   Apache web server.

### Setup Instructions

1. Clone the repository:

```bash
git clone https://github.com/Balsha98/Repository-TutoringCenter.git
```

2. Navigate to the project directory:

```bash
cd Repository-TutoringCenter/a-plus-tutoring
```

3. Import the database:

```bash
# Import the SQL file into your MySQL database.
mysql -u root -p aplus_tutoring_center < source/sql/database.sql
```

4. Set up your web server to point to the project directory.

5. Access the application:

```
http://localhost/local-repository-directory
```

## Application Views

### Profile View

-   View and edit personal information
-   Update contact details
-   Manage account settings
-   Upload profile picture

### Sessions View (Prototype)

**Planned Features**:

-   Browse available tutoring sessions.
-   Schedule new sessions.
-   View upcoming sessions.
-   Edit or cancel existing sessions.
-   Session calendar view.

### Reports View (Tutors Only)

-   View session history.
-   Track student progress.
-   Export data and reports.

## Project Structure

```
Repository-TutoringCenter/
│
├── a-plus-tutoring/    # Main application directory.
│   │
│   ├── public/         # Public-facing files.
│   │   │
│   │   ├── api/        # API layer.
│   │   │   └── assets/
│   │   │       ├── constraints/    # Validation constraints.
│   │   │       ├── controllers/    # API controllers.
│   │   │       └── routing/        # API routes.
│   │   │
│   │   ├── core/       # Core application files.
│   │   │   │
│   │   │   ├── assets/
│   │   │   │   │
│   │   │   │   ├── css/
│   │   │   │   │   ├── partials/       # CSS components.
│   │   │   │   │   ├── views/          # View-specific styles.
│   │   │   │   │   ├── general.css     # General styling.
│   │   │   │   │   ├── reusable.css    # Reusable classes.
│   │   │   │   │   └── vars.css        # CSS variables.
│   │   │   │   │
│   │   │   │   ├── dependencies/       # Dynamic JSON imports.
│   │   │   │   │
│   │   │   │   ├── javascript/
│   │   │   │   │   ├── controllers/    # JS controllers.
│   │   │   │   │   ├── models/         # Data models.
│   │   │   │   │   └── views/          # View-specific scripts.
│   │   │   │   │
│   │   │   │   ├── libraries/          # Third-party libraries.
│   │   │   │   │
│   │   │   │   └── media/
│   │   │   │       ├── icons/          # Icon files.
│   │   │   │       └── images/         # Image files.
│   │   │   │
│   │   │   ├── partials/
│   │   │   │   ├── loaders/            # Loading components.
│   │   │   │   ├── models/             # Modal components.
│   │   │   │   ├── views/              # View partials.
│   │   │   │   ├── footer.php          # Footer template.
│   │   │   │   ├── header.php          # Header template.
│   │   │   │   └── nav.php             # Navigation template.
│   │   │   │
│   │   │   └── views/          # Main application views.
│   │   │
│   │   ├── .htaccess           # Routing configuration.
│   │   └── index.php           # Application entry point.
│   │
│   └── source/         # Source code.
│       │
│       ├── handlers/   # Core handlers.
│       │   │
│       │   ├── core/
│       │   │   ├── database/           # Database handlers.
│       │   │   ├── models/             # Data models.
│       │   │   └── routing/            # Routing handlers.
│       │   │
│       │   └── helpers/
│       │       ├── classes/            # Helper classes.
│       │       └── scripts/            # Helper scripts.
│       │
│       ├── sql/        # Database schema.
│       │
│       ├── autoload.php        # Custom autoloader.
│       └── config.php          # Configuration file.
│
└── README.md           # Project documentation.
```

## Usage

### For Students

1. **Register/Login** - Create an account or login with credentials.
2. **Complete Profile** - Add personal information and preferences.
3. **Browse Sessions** - View available tutoring sessions (upcoming feature).
4. **Schedule Session** - Book a tutoring appointment (upcoming feature).
5. **Manage Sessions** - View and manage your scheduled sessions (upcoming feature).

### For Tutors

1. **Register/Login** - Create a tutor account or login.
2. **Setup Profile** - Add qualifications, subjects, and availability.
3. **View Sessions** - Check scheduled sessions with students (upcoming feature).
4. **Generate Reports** - Access analytics and session history.
5. **Track Progress** - Monitor student performance and engagement.

## Database Schema

The application uses a relational database with the following main tables:

-   **students** - Student account information and profiles.
-   **tutors** - Tutor account information, qualifications, and profiles.
-   **subjects** - Available tutoring subjects and categories.
-   **assignments** - Bridge table linking tutors to their teaching subjects (many-to-many).
-   **rooms** - Virtual or physical tutoring room assignments.
-   **sessions** - Scheduled tutoring sessions between students and tutors.
-   **ratings** - Student ratings and feedback for tutors and sessions.

## Security Features

-   Password hashing with PHP's `hash()` function.
-   SQL injection prevention with prepared statements.
-   Session management for user authentication.
-   Role-based access control (RBAC).
-   Input validation and sanitization.

## Current Status

### Completed Features

-   [x] User authentication (login/registration).
-   [x] Role-based access control.
-   [x] Profile view for both roles.
-   [x] Reports view for tutors.
-   [x] Basic session view layout.

### In Development

-   [ ] Full session scheduling functionality.
-   [ ] Session editing and cancellation.
-   [ ] Calendar integration.
-   [ ] Session reminders and notifications.

### Planned Features

-   [ ] Administrator role and dashboard.
-   [ ] Advanced reporting and analytics.
-   [ ] Rating and review system.

## Let's Connect

If you enjoyed this project or have any questions, feel free to reach out!

[![Email](https://img.shields.io/badge/Email-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:balsa.bazovic@gmail.com)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/balsha-bazovich)
[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Balsha98)

⭐ If you found this project helpful, please consider giving it a star!

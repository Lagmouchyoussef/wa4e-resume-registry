# 🎓 Resume Registry : Web Application (PHP & jQuery)
> **Validated Project - Coursera | University of Michigan**

This project, **`wa4e-resume-registry`**, is the practical implementation of advanced web development concepts. It is a complete Resume Management (Registry) application that combines the robustness of **PHP backend** with the dynamism of **jQuery frontend**. This project was completed as part of the **JavaScript, jQuery and JSON** certification.

[![Coursera Badge](https://img.shields.io/badge/Coursera-University%20of%20Michigan-blue)](https://www.coursera.org/learn/javascript-jquery-json/home/module/1)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)](https://www.php.net/)
[![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=flat&logo=jquery&logoColor=white)](https://jquery.com/)
[![JSON](https://img.shields.io/badge/JSON-000000?style=flat&logo=json&logoColor=white)](https://www.json.org/json-en.html)
[![Status](https://img.shields.io/badge/Status-Deployed-success)](https://mariana-aphanitic-emilie.ngrok-free.dev/coursera/wa4e-resume-registry/)

---

## 📋 Table of Contents

- [🌟 Project Overview](#-project-overview)
- [🚀 Live Demo (Ngrok)](#-live-demo-ngrok)
- [🎓 Certificate of Achievement](#-certificate-of-achievement)
- [🛠️ Tech Stack](#️-tech-stack)
- [⚙️ Local Installation](#️-local-installation)
- [📂 Repository Structure](#-repository-structure)
- [🔍 Application Features](#-application-features)

---

## 🌟 Project Overview

The **Resume Registry** is an interactive web application that allows users to add, view, edit, and delete professional profiles. Unlike a classic monolithic application, this project uses a modern architecture where the frontend (jQuery) communicates asynchronously with the backend (PHP) to handle data.

This code is hosted on GitHub and serves as a reference for validating full-stack development skills.

🔗 **View Source Code on GitHub:**  
https://github.com/Lagmouchyoussef/wa4e-resume-registry

---

## 🚀 Live Demo (Ngrok)

The project has been deployed via a secure **Ngrok** tunnel to allow for direct evaluation by Coursera graders.

🌐 **Access the deployed application:**  
👉 **[https://mariana-aphanitic-emilie.ngrok-free.dev/coursera/wa4e-resume-registry/](https://mariana-aphanitic-emilie.ngrok-free.dev/coursera/wa4e-resume-registry/)**

---

## 🎓 Certificate of Achievement

This project was submitted and successfully validated as part of the University of Michigan curriculum.

✅ **Verify Official Certificate:**  
🔗 [Click here to verify accomplishment (XDRLAHJ41PM2)](https://www.coursera.org/account/accomplishments/verify/XDRLAHJ41PM2)

---

## 🛠️ Tech Stack

This project uses a combination of server-side and client-side technologies to provide a seamless experience:

### Backend
- **PHP**: Server-side logic, form processing, and JSON response generation.
- **MySQL**: Relational database for profile storage.

### Frontend
- **HTML5**: Semantic page structure.
- **CSS3**: Styling and responsive design (Bootstrap or custom CSS).
- **JavaScript & jQuery**: DOM manipulation and dynamic data handling.
- **JSON**: Data exchange format between client and server (AJAX).

### Deployment
- **Ngrok**: Secure HTTP tunneling to expose the local server to the internet.

---

## ⚙️ Local Installation

To run this project on your own machine, you will need an environment supporting PHP and MySQL (e.g., XAMPP, MAMP, or a LAMP server).

1.  **Clone the repository**
    ```bash
    git clone https://github.com/Lagmouchyoussef/wa4e-resume-registry.git
    ```

2.  **Configure the Database**
    *   Import the SQL file (provided in the project) into your MySQL manager (e.g., phpMyAdmin).
    *   Update the database credentials in the PHP configuration file (`pdo.php` or similar).

3.  **Launch the Server**
    *   Move the folder to your `htdocs` (XAMPP/MAMP) or `/var/www/html` directory.
    *   Access `http://localhost/wa4e-resume-registry` in your browser.

---

## 📂 Repository Structure

The file organization follows the standards recommended by the course:

```text
.
├── index.php           # Home page (Profile list)
├── add.php             # Add profile form
├── edit.php            # Edit profile form
├── api.php             # JSON endpoint for AJAX requests
├── scripts/
│   └── script.js       # jQuery logic and AJAX handling
├── styles/             # CSS files
├── vendor/             # External libraries (e.g., Bootstrap, jQuery)
└── README.md           # Project documentation
```

---

## 🔍 Application Features

This "Resume Registry" application demonstrates the following skills:

- **Full CRUD Operations**: Create, Read, Update, and Delete user profiles.
- **Form Validation**: Server-side (PHP) and client-side (JS) data control.
- **Dynamic Loading (AJAX)**: Updating the profile list without reloading the page using jQuery.
- **Session Management**: User authentication and access security.
- **Data Persistence**: Reliable data storage in a MySQL database.

---

## 👤 Author

**Lagmouch Youssef**
- *Full Stack Web Developer*
- *GitHub:* [@Lagmouchyoussef](https://github.com/Lagmouchyoussef)
- *Certificate:* [Verify on Coursera](https://www.coursera.org/account/accomplishments/verify/XDRLAHJ41PM2)

---

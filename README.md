# ☁️ Cloud Portfolio Website

A cloud-hosted web application deployed on AWS EC2 with user authentication and MySQL database integration.

## 🚀 Project Overview

This project demonstrates the deployment of a web application on AWS Cloud using Linux, Nginx, PHP, and MySQL.

Users can:

- View a personal portfolio website
- Create an account (Sign Up)
- Login securely
- Access a dashboard after authentication

The application is hosted on an AWS EC2 Ubuntu instance and connected to a MySQL database.

---

## 🏗️ Architecture

User → Internet → AWS EC2 (Ubuntu)

↓

Nginx Web Server

↓

PHP Application

↓

MySQL Database

---

## 🛠️ Technologies Used

### Cloud
- AWS EC2

### Operating System
- Ubuntu Linux

### Web Server
- Nginx

### Backend
- PHP

### Database
- MySQL

### Version Control
- Git
- GitHub

---

## ✨ Features

- User Registration System
- User Login System
- MySQL Database Integration
- Password Hashing
- Linux Server Administration
- AWS Cloud Deployment
- Responsive Portfolio Website

---

## 📂 Project Structure

```text
.
├── index.html
├── signup.php
├── login.php
├── dashboard.php
├── logout.php
├── style.css
└── README.md
```

---

## ⚙️ Setup Instructions

### 1. Install Dependencies

```bash
sudo apt update
sudo apt install nginx php php-fpm php-mysql mysql-server -y
```

### 2. Create Database

```sql
CREATE DATABASE cloudproject;
```

### 3. Create Users Table

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);
```

### 4. Configure Nginx and PHP

- Install PHP-FPM
- Configure Nginx to process PHP files
- Restart Nginx

```bash
sudo systemctl restart nginx
```

---

## 📚 What I Learned

Through this project I gained hands-on experience with:

- AWS EC2 Deployment
- Linux Server Management
- Nginx Configuration
- PHP Development
- MySQL Database Operations
- Authentication Systems
- Git & GitHub
- Cloud Infrastructure Basics

---

## 🎯 Future Improvements

- HTTPS using SSL/TLS
- Custom Domain Name
- Password Reset Functionality
- User Profile Management
- AWS RDS Integration
- Docker Deployment
- CI/CD Pipeline

---

## 👨‍💻 Author

**Geya Nedunuri**

Aspiring Cloud Engineer | AWS Learner | Linux & Networking Enthusiast

---

## 📌 Project Status

✅ Completed and Deployed on AWS EC2

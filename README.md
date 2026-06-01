# 📰 News Management System
**Assignment 2 – News Management System Development**

---

## 📋 Project Description
A news management system built with PHP and MySQL, allowing users to register, log in, and manage news articles and categories.

---

## 🗂️ File Structure

```
ASSIGNMENT2/
│
├── index.php               # Home page - displays all news
├── Dashboard.php           # Control panel (requires login)
│
├── LoginForm.php           # Login page
├── LoginLogic.php          # Login logic
├── registerForm.php        # Register page
├── registerLogic.php       # Register logic
│
├── AddCategory.php         # Add new category
├── ShowCategory.php        # Display all categories
│
├── AddNews.php             # Add new article
├── ShowNews.php            # Display all news with edit/delete
├── updateNews.php          # Edit article
├── deleteNews.php          # Delete article (status change)
├── ViewDeletedNews.php     # View deleted articles
│
├── dbConnection.php        # Database connection
├── style.css               # Stylesheet
└── uploads/                # Images folder
```

---

## 🗄️ Database Structure

### `users` Table
| Column | Type |
|--------|------|
| id | INT AUTO_INCREMENT PRIMARY KEY |
| name | VARCHAR(100) |
| email | VARCHAR(100) UNIQUE |
| password | VARCHAR(255) |

### `categories` Table
| Column | Type |
|--------|------|
| id | INT AUTO_INCREMENT PRIMARY KEY |
| categ_name | VARCHAR(100) |

### `allnews` Table
| Column | Type |
|--------|------|
| id | INT AUTO_INCREMENT PRIMARY KEY |
| title | VARCHAR(255) |
| category_id | INT (FK → categories.id) |
| news_text | TEXT |
| image | VARCHAR(255) |
| user_id | INT (FK → users.id) |
| status | TINYINT (1 = published, 0 = deleted) |

---

## ⚙️ How to Run

1. Make sure you have **XAMPP** or **WAMP** installed
2. Place the project folder inside `htdocs`
3. Open **phpMyAdmin** and create a database named `news`
4. Create the tables using the structure above
5. Open your browser and go to:
```
http://localhost/ASSIGNMENT2/index.php
```

---

## 🔑 Features

- ✅ User registration with password hashing (bcrypt)
- ✅ User login with session management
- ✅ Add / View / Edit / Delete news articles
- ✅ Add and view categories
- ✅ Image upload for news articles
- ✅ Soft delete (status change instead of permanent delete)
- ✅ View deleted articles

---

## 👨‍💻 Course Information

| | |
|--|--|
| **University** | Islamic University of Gaza |
| **Instructor** | Suhaib Ibrahim Abu Shaar |

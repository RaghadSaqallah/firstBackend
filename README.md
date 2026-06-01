# 📰 News Management System
**التكليف الثاني – تطوير نظام إدارة الأخبار**

---

## 📋 وصف المشروع
نظام إدارة أخبار مبني بـ PHP و MySQL، يتيح للمستخدمين التسجيل وتسجيل الدخول وإدارة الأخبار والفئات.

---

## 🗂️ هيكل الملفات

```
ASSIGNMENT2/
│
├── index.php               # الصفحة الرئيسية - تعرض جميع الأخبار
├── Dashboard.php           # لوحة التحكم (يتطلب تسجيل دخول)
│
├── LoginForm.php           # صفحة تسجيل الدخول
├── LoginLogic.php          # منطق تسجيل الدخول
├── registerForm.php        # صفحة إنشاء حساب
├── registerLogic.php       # منطق إنشاء الحساب
│
├── AddCategory.php         # إضافة فئة جديدة
├── ShowCategory.php        # عرض جميع الفئات
│
├── AddNews.php             # إضافة خبر جديد
├── ShowNews.php            # عرض جميع الأخبار مع حذف وتعديل
├── updateNews.php          # تعديل خبر
├── deleteNews.php          # حذف خبر (تغيير الحالة)
├── ViewDeletedNews.php     # عرض الأخبار المحذوفة
│
├── dbConnection.php        # الاتصال بقاعدة البيانات
├── style.css               # ملف التنسيق
└── uploads/                # مجلد الصور
```

---

## 🗄️ قاعدة البيانات

### جدول `users`
| العمود | النوع |
|--------|-------|
| id | INT AUTO_INCREMENT PRIMARY KEY |
| name | VARCHAR(100) |
| email | VARCHAR(100) UNIQUE |
| password | VARCHAR(255) |

### جدول `categories`
| العمود | النوع |
|--------|-------|
| id | INT AUTO_INCREMENT PRIMARY KEY |
| categ_name | VARCHAR(100) |

### جدول `allnews`
| العمود | النوع |
|--------|-------|
| id | INT AUTO_INCREMENT PRIMARY KEY |
| title | VARCHAR(255) |
| category_id | INT (FK → categories.id) |
| news_text | TEXT |
| image | VARCHAR(255) |
| user_id | INT (FK → users.id) |
| status | TINYINT (1 = منشور, 0 = محذوف) |

---

## ⚙️ طريقة التشغيل

1. تأكد إن عندك **XAMPP** أو **WAMP** مثبت
2. حط المجلد في `htdocs`
3. افتح **phpMyAdmin** وأنشئ قاعدة بيانات اسمها `news`
4. أنشئ الجداول من الجدول فوق
5. افتح المتصفح على:
```
http://localhost/ASSIGNMENT2/index.php
```

---

## 🔑 المميزات

- ✅ تسجيل حساب جديد مع تشفير كلمة المرور (bcrypt)
- ✅ تسجيل دخول مع session
- ✅ إضافة / عرض / تعديل / حذف الأخبار
- ✅ إضافة وعرض الفئات
- ✅ رفع صور للأخبار
- ✅ الحذف بتغيير الحالة (Soft Delete) بدل الحذف الفعلي
- ✅ عرض الأخبار المحذوفة

---

## 👨‍💻 معلومات المساق

| | |
|--|--|
| **الجامعة** | الجامعة الإسلامية بغزة |
| **القسم** | الوسائط المتعددة وتطوير الويب |
| **المدرس** | صهيب إبراهيم أبو شعر |

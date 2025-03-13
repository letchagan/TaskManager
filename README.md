# 📝 TaskManager - Laravel Task Management System

![logo](https://github.com/user-attachments/assets/16aa3539-23ab-46f9-93bd-a1993b9e2482)


## 🚀 About the Project
TaskManager is a simple task management application built with Laravel. It allows users to **create, edit, delete, and manage tasks** efficiently.

## 🎯 Features
✅ Add, edit, delete, and update tasks  
✅ Status management (Pending, Completed)  
✅ Bootstrap-based UI for better user experience  
✅ CSRF protection for secure form submissions  
✅ Responsive design  

## 🛠️ Technologies Used
- **Laravel** - PHP Framework
- **Bootstrap** - Frontend Styling
- **MySQL / SQLite** - Database
- **Git & GitHub** - Version Control
- **Composer & Artisan** - Laravel CLI tools

## ⚡ Installation Guide
Follow these steps to set up the project on your local machine.


### 1️⃣ Clone the Repository
```sh
git clone https://github.com/yourusername/TaskManager.git
cd TaskManager

```

## 2️⃣ Install Dependencies
```sh
composer install
npm install
```

###3️⃣ Set Up Environment

Copy .env.example to .env

Generate the app key:

```sh
php artisan key:generate
```

Configure your database details in .env file:
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=taskmanager
DB_USERNAME=root
DB_PASSWORD=
```

###4️⃣ Run Migrations & Seed Database
```sh
php artisan migrate --seed
```

###5️⃣ Serve the Application
```sh
php artisan serve
```
Open http://127.0.0.1:8000 (or) http://127.0.0.1:8000/tasks in your browser.

📂 Project Structure
```csharp
TaskManager/
│── app/               # Models, Controllers, Middleware
│── database/          # Migrations & Seeders
│── public/            # Assets, favicon.ico
│── resources/         # Views (Blade templates)
│── routes/            # Web & API Routes
│── .env.example       # Environment file example
│── README.md          # Documentation
```

📸 Screenshots

###Tasklisted
![Screenshot 2025-03-13 101414](https://github.com/user-attachments/assets/1ee980e4-038d-40ad-8809-c5396266ea85)

###Creating Task
![Screenshot 2025-03-13 101627](https://github.com/user-attachments/assets/a1756b38-4bac-4d84-b97c-87c36505486d)

###Created Task
![Screenshot 2025-03-13 101702](https://github.com/user-attachments/assets/1dd662c0-efb4-41bd-8518-a3ed8790003f)

###Editing Task
![Screenshot 2025-03-13 101729](https://github.com/user-attachments/assets/4f22d4c1-e973-4829-ab48-2301ef2e56ac)

###Updated Task list
![Screenshot 2025-03-13 101802](https://github.com/user-attachments/assets/d69319eb-b167-4ca0-85be-00df1a8044e9)

###Deleted Task
![Screenshot 2025-03-13 101837](https://github.com/user-attachments/assets/efcdf8e0-ed39-43c7-8406-ca84c3bf8219)

🛠️ Deployment (Optional)

To deploy on a live server, use:
```sh
php artisan cache:clear
php artisan config:cache
php artisan migrate --force
```

🤝 Contributing
Pull requests are welcome! Open an issue if you find any bugs or improvements.

📜 License
This project is licensed under the MIT License.

✨ Developed with ❤️ using Laravel ✨
```markdown

---

### **🔹 What This README Includes:**
✅ **Project Description**  
✅ **Features**  
✅ **Technology Stack**  
✅ **Installation Guide**  
✅ **Project Structure**  
✅ **Screenshots Section (Add Image Link)**  
✅ **Deployment Notes**  
✅ **Contribution Guidelines**  
✅ **License**  

Let me know if you need any modifications! 🚀🔥
```

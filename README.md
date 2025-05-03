# Laravel Orders API with AI Tools

This is a simple Laravel API project for managing `Customers` and `Orders`, created with the assistance of AI development tools like **Cursor**.

---

## 🚀 Features

- Create and manage `Customers` and `Orders`
- Filter orders by status (e.g., `shipped`, `pending`)
- RESTful API endpoints
- Built with Laravel 11
- AI-generated code scaffolding for models, migrations, and controllers

---

## 🤖 AI Tools Used

### 1. **Cursor**
- Used for generating models, migration fields, and controller logic
- Helped write validation and database logic based on simple comments


## 🧪 Example Endpoints

### Create Order

### Get All Orders

### Filter Orders by Status

---

## 🛠️ Installation

```bash
git clone https://github.com/nadanasr432/order-api.git
cd laravel-orders-ai
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve


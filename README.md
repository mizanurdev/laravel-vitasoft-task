# laravel vitasoft task

This project is a Laravel-based API project named "laravel-vitasoft-task".

## Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP >= 8.0
- Composer installed
- MySQL or any other database system of your choice

## Getting Started

To get a local copy up and running, follow these simple steps.

### Installation

### Clone the repository:
```
git clone https://github.com/mizanurdev laravel-vitasoft-task.git
cd laravel-vitasoft-task
```

### Step 1: Composer install
```
composer install
cp .env.example .env
```
### Step 2: Update your .env file with the correct database configuration:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_vitasoft_task
DB_USERNAME=root
DB_PASSWORD=
```
### Step 3: Generate the application key:
```
php artisan key:generate
php artisan serve
```
### Step 4: Import the database which is provided with the project and Run the server:
```
php artisan serve
```

### API Login
Use the following endpoint to log in and obtain a bearer token:

- Endpoint: http://localhost:8000/api/login
- Method: POST
- Request Body:

```
{
    "email": "mizan@gmail.com",
    "password": "12345678"
}
```
### Example API Endpoint

To get JSON data from the products endpoint:
- Endpoint: http://localhost:8000/api/products
- Method: GET
- Authorization: Set the Bearer token obtained from the login endpoint.


### Contributing

If you'd like to contribute to this project:

- Fork the repository.
- Create a new branch for your feature or bug fix.
- Make your changes and ensure everything works as expected.
- Submit a pull request for review.

### License
This project is licensed under the MIT License. You are free to use, modify, and distribute the code under the terms of this license.
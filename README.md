# DailyHub - Daily Manager

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php)

A minimalist daily manager built with Laravel to monitor tasks, financial income and expenses

## Features

- **Unified Ledger:** Track both incomes and expenses inside a single, high-performance database model.
- **Dynamic Categories:** Organize your cash flow with custom categories (Food, Rent, Salary).
- **Safe Toggle:** Deactivate categories or transaction types cleanly without breaking past records.
- **Real-time Balance:** Instantly see your net profit and safe-to-spend limits.
- **More to come**

## Installation & Setup

Follow these quick steps to get the project running locally.

### Prerequisites
- PHP >= 8.3
- Composer
- SQLite

### Setup Guide

```bash
    git clone https://github.com/LouKlom/DailyHub
    cd DailyHub
```

### Install composer
```bash
    composer install
```

### Run the migrations
```bash
    php artisan migrate:fresh
```

### Laucnh server
```bash
    php artisan serve
```

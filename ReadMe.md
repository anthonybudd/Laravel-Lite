# Laravel Lite

<p align="center">
    <img height="400" src="https://raw.githubusercontent.com/anthonybudd/anthonybudd/refs/heads/main/img/laravel-micro-thumbnail.png"/>
</p>

A super minimal Laravel PHP microservice template for prototyping PHP projects.

- 🐘 Built Using Laravel Illuminate Components
- 🚀 Super Minimal. Crazy-fast Cold Starts
- ✅ Tests using PHPUnit

```php
<?php
use Illuminate\Http\Response;

$router->get('/', function () {
    return new Response("Hello World", 200); 
});
```

## Getting Started

```
git clone git@github.com:anthonybudd/laravel-lite.git
cd laravel-lite

cp .env.example .env
docker run --rm -it -v "$(pwd):/app" composer:latest install
docker compose up
docker compose run --rm api composer test

open http://localhost
```



## Project Structure

All of your code goes into `/src` you can add subfolders if needed, otherwise everything can go into `App.php`.

```
┌── 📁 src
│   └── 📄 App.php
├── 📁 public
│   └── 📄 index.php
├── 📁 tests
│   └── 📄 TestCase.php
│
├── 📖 ReadMe.md
├── 📖 bootstrap.php
```


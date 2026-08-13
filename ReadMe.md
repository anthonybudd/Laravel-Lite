# Laravel Lite

<img width="350" src="https://raw.githubusercontent.com/anthonybudd/Laravel-Lite/refs/heads/master/public/logo.svg?v=2"/>

A super minimal microservice template using Illuminate components for rapid prototyping of Laravel projects.

- 🐘 Built Using Laravel Illuminate Components
- 🚀 Super Minimal. Crazy-Fast Cold Starts
- ✅ Tests Using PHPUnit

```php
<?php
use Illuminate\Http\JsonResponse;

$router->get('/', function () {
    return new JsonResponse([1, 2, 3, 4]); 
});
```

<p align="center">
  <a href="https://youtu.be/Ue6Nr_FEFWI">
  <img width="350" src="https://raw.githubusercontent.com/anthonybudd/anthonybudd/refs/heads/main/img/laravel-lite.png" alt="YouTube Video">
  </a>
  </br>
  <a href="https://youtu.be/Ue6Nr_FEFWI">
  Getting Started: youtu.be/Ue6Nr_FEFWI
  </a>
</p>

## Getting Started

```sh
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
├── 📄 ReadMe.md
├── 🐘 bootstrap.php
├── 🚢 Dockerfile
```


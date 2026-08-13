# Laravel Lite

<img width="350" src="https://raw.githubusercontent.com/anthonybudd/Laravel-Lite/7917ae3c42ea009c972a9eac82b2d76a1c2b3677/public/logo.svg"/>

A super minimal microservice template using Illuminate components for rapid prototyping of Laravel projects.

- 🐘 Built Using Laravel Illuminate Components
- 🚀 Super Minimal. Crazy-Fast Cold Starts
- ✅ Tests Using PHPUnit

```php
<?php
use Illuminate\Http\Response;

$router->get('/', function () {
    return new Response("Hello World", 200); 
});
```
<sub>src/App.php</sub>

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


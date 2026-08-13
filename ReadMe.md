# Laravel Lite

<img height="75" src="https://raw.githubusercontent.com/anthonybudd/anthonybudd/refs/heads/main/img/laravel-micro-thumbnail.png"/>

A super minimal Laravel PHP microservice template for prototyping PHP projects.


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
docker compose up
docker compose run --rm api composer test

open http://localhost
```

## Project Structure
```
┌── 📁 src
│   ├── 📄 App.php
│   └── 📄 bootstrap.php
├── 📁 tests
│   └── 📄 TestCase.php
├── 📖 ReadMe.md
│  ...
```


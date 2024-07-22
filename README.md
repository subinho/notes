
# Notes App
A notes web application, where you can create and delete notes which are stored in mysql database.

#### Build with

[![PHP](https://img.shields.io/badge/php-%23777BB4.svg?&logo=php&logoColor=white&link=https://www.php.net/)](#)

[![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=fff&link=https://www.mysql.com/)](#)

[![TailwindCSS](https://img.shields.io/badge/Tailwind%20CSS-%2338B2AC.svg?logo=tailwind-css&logoColor=white&link=https://tailwindcss.com/)](#)

## Getting started

Install notes with composer

#### Prerequisites

Composer

https://getcomposer.org/download/

#### Installation

1. Clone the repository
```bash
  git clone https://github.com/subinho/notes.git
```

2. Install composer packages
```bash
  composer install
```

3. Add autoload in composer.json
```bash
    "autoload": {
        "psr-4": {
            "Core\\": "Core/",
            "Http\\": "Http/"
        }
    }
```

4. Run dump
```bash
composer dump-autoload
```

5. Set up your database in config.js
```bash
'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'Name of your database',
        'charset' => 'utf8mb4'
    ],
```
6. Set up your username and password in Core\Database.php
```bash
public function __construct($config, $username = 'Your username', $password = 'Your password')
```

or

Add your username and password in bootstrap.php
```bash
return new Database($config['database'], 'Your username', 'Your password');
```

7. Start your server
```bash
php -S localhost:8000 -t public/
```


## Reference

Resources used in this project

Logo: https://pixabay.com/cs/illustrations/robot-postit-pozn%C3%A1mka-d%C4%9Blat-1470108/

Avatar: https://pixabay.com/cs/vectors/d%C3%ADt%C4%9B-avatar-ikona-prost%C3%BD-design-1837375/

While creating project I used tailwindcss templates: https://tailwindui.com/?ref=top


## Installation

To create your development environment [follow these instructions](https://laravel.com/docs/11.x/installation#local-installation-using-herd).

Setting up your development environment on your local machine:
```bash
$ git clone https://github.com/Akshatshah823/practical_test
$ cd practical_test
$ cp .env.example .env
$ php artisan key:generate
$ php artisan storage:link
```
 
 Change .env to to run the mysql
DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=employee_information
 DB_USERNAME=root
 DB_PASSWORD=

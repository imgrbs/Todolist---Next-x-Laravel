# todolist-laravel

Laravel API practice with Test Acceptance.

## Prerequisites
- Git 2.14.3
- PHP 7.1 or earlier.
- PHP Extensions which required to run Laravel properly such as
  - OpenSSL
  - PDO
  - Mbstring
  - Tokenizer
  - XML
- MySQL 5.6.35 or earlier *or* MariaDB 10.1.29v or earlier
- Composer 1.4.2 or earlier.
- Node.js 8.4.0 or earlier
- Yarn 1.1.0


## Getting Started

### Installation
First, clone this repository to local.

```bash
git clone https://github.com/imgrbs/Todolist-Laravel.git
```
And then, install composer packages.

```bash
composer install
```

Afterward, copy and rename .env.example to .env and edit your value after your database was created on DBMS.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<database>
DB_USERNAME=<username>
DB_PASSWORD=<password>
```

You must initial your database structure to make your sure it works properly.

```
php artisan migrate:fresh --seed
```

If you need to serve Laravel, try to use this command.

```bash
php artisan serve
```

## Testing

 If you want to test these units, first you must to install Newman as global package.

 ```bash
 yarn global add newman
 ```

 Last, run this command to run unit test.

 ```bash
 newman run "test/Todolist.postnam_collection.json"
 ```

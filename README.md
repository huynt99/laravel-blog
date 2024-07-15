
## Simple  blog huhuhaha


## How to install

### Get file
```bash
git clone https://github.com/huynt99/blog
cd blog
composer install
php artisan key:generate
```
### Configure your .env file

Database example :
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_username
DB_PASSWORD=db_password
```

### Create tables
```bash
php artisan migrate
```
### Fake data

```bash
php artisan db:seed
```
### Final steps
```bash
php artisan serv
```
## Default admin
```bash
username : admin@gmail.com
password : 12345678
```

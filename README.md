## Second Database

- Create Second Database Manually
- Add Second Database Connection to the migration

## PgSql Database

- Add pdo_pgsql extenstion to server
- Add PgSql database manually


## Add Mongo database Server Configure

- Download mongodb .dll file from (<https://pecl.php.net/package/mongodb/1.13.0/windows>)
- Add .dll file to php ext folder.
- Add the extension in php.ini file named 'extension=mongodb'.
- Check the extension in phpinfo method.

## Mongo Database use

- use commad

```sh
composer require jenssegers/mongodb:dev-master --ignore-platform-req=ext-mongodb
```

- Package Source (https://github.com/jenssegers/laravel-mongodb) and flow the instructions
- Flow Instruction (<https://www.mongodb.com/compatibility/mongodb-laravel-intergration>)
- Flow Instruction (<https://www.itsolutionstuff.com/post/laravel-5-mongodb-crud-tutorialexample.html>)
- Flow Instruction (<https://www.codecheef.org/article/laravel-crud-with-mongodb-tutorial>)
- php artisan migrate show error


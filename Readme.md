# First API REST WITH PHP

## This is an small example about to make an API RESTUFUL with PHP

### This example use third package how pecee/simple-router and illuminate/database

#### It's true that it's possible make this with pure PHP, but it's better make faster this apps

So, for test this small API Restful, clone this respository and the use:

```conf
composer install
```

It's to install the necessary dependencies for the app

Then, go to the doc directory and take the sql script, inser into the SGBD, that in this case, i used phpMyAdmin. After load the script that gives you the db and the data, go to the local and test it:

```conf
php -S localhost:3000
```

And you can see the code for watch the Routes in: src/router/Api.php.

**Use a client to test the API with PostMan or Thunder Client of Visual Studio Code Extension**
**End**

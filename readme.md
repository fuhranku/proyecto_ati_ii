<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

# Selling/Buying Real Estate Web application

College project. Web application developed on LARAVEL PHP framework. It's a Sell/Buy properties application like century-21, for example.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them. For WINDOWS:

```
XAMPP/WAMPP (Which means installing Apache and MySQL)
```

```
PHP 7.x
```

```
Composer dependencies installer
```

### Setting this project for local work enviroment and testing

This is what you need to have this project up and running in your local machine

#### Clone project

```
git clone https://github.com/fuhranku/proyecto_ati_ii.git
```
Note: If you're using XAMPP, for example, project folder needs to be inside **htdocs** directory of XAMPP

#### Install composer dependencies

Whenever you clone a new Laravel project you must now install all of the project dependencies. This is what actually installs Laravel itself, among other necessary packages to get started.

```
composer install
```

#### Create a copy of .env file

Since .env files are not commited, it's necessary to create this file. There is a .env.example which is a template of the .env file that the project expects us to have. So we will make a copy of the .env.example file and create a .env file that we can start to fill out to do things like database configuration in the next few steps.

```
cp .env.example .env
```
This will create a copy of the .env.example file in your project and name the copy simply .env.

#### Generate an app encryption Key

Laravel requires you to have an app encryption key which is generally randomly generated and stored in your .env file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more.

Laravel’s command line tools thankfully make it super easy to generate this. In the terminal we can run this command to generate that key.
```
php artisan key:generate
```
If you check the .env file again, you will see that it now has a long random string of characters in the APP_KEY field. We now have a valid app encryption key.

#### Create a DB for the application

Turn ON XAMPP/WAMPP MySQL, then go to

```
localhost/phpmyadmin
```

and create database for project. Let's put as a convention to use *p_laravel_ati_ii*

#### In the .env file, add database information to allow Laravel to connect to the database

We will want to allow Laravel to connect to the database that you just created in the previous step. To do this, we must add the connection credentials in the .env file and Laravel will handle the connection from there.

In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created.

Usually following configuration should work:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=p_laravel_ati_ii
DB_USERNAME=root
DB_PASSWORD=
```
Note: Please check which port is WAMPP/XAMPP using for MySQL, usually is 3306, but it might change.

#### Migrate the database

Once your credentials are in the .env file, now you can migrate your database.

```
php artisan migrate
```
If this command doesn't work because table's name is too long. Fix it as follows

##### Fixing table's length error

Go to AppServiceProvider.php file inside laravel project and put following code:
```
    use Illuminate\Support\Facades\Schema;

    public function boot()
    {
        Schema::defaultStringLength(191);
    }
```
This should be enough. It’s not a bad idea to check your database to make sure everything migrated the way you expected.

## Running project

To see project working turn **Apache** and **MySQL** ON from XAMPP/WAMPP server.

Then, simply visit project by putting following URL
```
localhost/<project_name>/public
```

## Authors

* **Frank Ponte** - *Initial work/Developer* - [fuhranku](https://github.com/fuhranku)
* **Leonardo Pinzón** - *Developer* - [paladin601](https://github.com/paladin601)
* **Ricardo Osuna** - *Developer* - [Osrrus](https://github.com/Osrrus)
* **Yuliana Fernández** - *Developer* - [yuliferna](https://github.com/yuli-ferna)
* **José Enrique Tirado** - *Developer* -[jet29](https://github.com/jet29)

See also the list of [contributors](https://github.com/fuhranku/proyecto_ati_ii/graphs/contributors) who participated in this project.

## Acknowledgments

Thanks to **DevMarketer** for his [Setup a Laravel Project You Cloned from Github.com](https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/)

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

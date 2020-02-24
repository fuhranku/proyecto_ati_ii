<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

# Selling/Buying Real Estate Web application

College project. Web application developed on LARAVEL PHP framework. It's a Selling/Buying Real Estate application like century-21, for example.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them. For WINDOWS:


* PHP 7.x  **Note: You need to modify in the directory where is installed. Reference:https://www.php.net/manual/es/mongodb.installation.windows.php**

    * Download dll for MongoDB in https://pecl.php.net/package/mongodb and copy **php_mongodb.dll** in folder that you install PHP 7.x
    * In php.ini add next line:
```
    extension=php_mongodb.dll 
```

* Mongo DB **Without credentials or check note in Step 2 Install dependencies and run project**

* NodeJs

* Composer

* Optional Dependency: Yarn


### Setting this project for local work enviroment and testing

This is what you need to have this project up and running in your local machine

#### Step 1: Clone project

```
git clone https://github.com/fuhranku/proyecto_ati_ii.git
```

#### Step 2: Install dependencies and run project

The first thing you have to do is to raise the MongoDB service with the following command in Window:

```
mongod    or    npm run mongo    or    yarn mongo
```

The following depends on whether your database has credentials or not. If you don't have credentials run the following command.
But if you have credentials skip this and go to the note.

```
npm run start    or    yarn start
```

**Note**: Is your Mongo DB need credentials run the following command in the terminal: 

```
npm run install    or    yarn install
```

Complete in the generated file (.env) the credentials , user and password:

```
DB_USERNAME= yourUser
DB_PASSWORD= yourPassword
```

Finally execute the following command

```
npm run server-migrate    or    yarn server-migrate 
```

**Open browser in http://localhost:8000**

## Authors

* **Frank Ponte** - *Developer* - [fuhranku](https://github.com/fuhranku)
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

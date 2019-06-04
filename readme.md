# Becode - Build an API with Laravel

![Becode logo](https://raw.githubusercontent.com/Raigyo/react-character-manager/master/img/becode-logo.png)

*June 2019*

> 🔨 Laravel - Api. Inpired by the tutorial from [Medium](https://medium.com/employbl/build-an-api-with-laravel-5-7-b3aa16ca2e69). The goal of the exercise is to create a database managed by tinkle and make some unit testing


* * *

[x] Routes (API)

[x] Database model, table and controller (CRUD)

[x] Model Factories

[x] Seeders

[x] Eloquent ORM & Tinker

[x] Unit testing (PHP Unit)

## Features

- CRUD using Tinker
- Unit testing

## Installation

You will need a server to run the application and PHP. For instance Lamp.
You also will need composer if you want to add dependencies.

To launch the server, go on the directory of this app the launch:

`$ php artisan serve`

To test the app, you can use the Artisan Tinker command. This allows you to directly view and manipulate your database.

### Seed the database

`$ php artisan db:seed`

### Use Tinker

`$ php artisan tinker`

>*Psy Shell v0.9.9 (PHP 7.1.7 — cli) by Justin Hileman*

**Create**

~~~~
>>> $p = new App\Task;

>>> $p->title = 'New title';

>>> $p->description = 'New descritpion';

>>> $p->save();
~~~~

**Read**

`>>> $p = \App\Task::all();`

or

`>>> $p = \App\Task::findorFail(1);`

where '1' is the id number.

**Update**

~~~~
>>> $p = \App\Task::findorFail(11);

>>> $p->title = "Updated title";

>>> $p->description = "Updated description";`

>>> $p->save();
~~~~

**Delete**
~~~~
>>> $p = \App\Task::findorFail(12);

>>> $p ->delete();
~~~~

or

`>>> $p ->forceDelete();`


### Use PHP Unit

Create a test 'UserTest' in the Feature directory...

`$ php artisan make:test UserTest`

Create a test 'UserTest' in the Unit directory...

`$ php artisan make:test UserTest --unit`

In this app, the test has already been created: tests/Feature/TaskTest.php

Launch a test:

`$ vendor/bin/phpunit`


## Useful links

[Build an API with Laravel](https://medium.com/employbl/build-an-api-with-laravel-5-7-b3aa16ca2e69)

[Eloquent ORM](https://laravel.com/docs/5.0/eloquent)

[Tinker: Laravel doc](https://laravel.com/docs/5.7/artisan#tinker)

[Use Resource Controller, Artisan and Tinker to set up REST API in Laravel](https://medium.com/employbl/create-a-database-model-and-controller-in-laravel-5-3-b3e15218f6ae)

[Testing: Laravel doc](https://laravel.com/docs/5.8/testing)

[Getting Started with PHPUnit in Laravel](https://semaphoreci.com/community/tutorials/getting-started-with-phpunit-in-laravel)

[How to test specific test class using phpunit in laravel](https://stackoverflow.com/questions/39118117/how-to-test-specific-test-class-using-phpunit-in-laravel)


<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1400 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

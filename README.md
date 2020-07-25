#TwoCent

This is a web application developed in Laravel 6 for people who have something to share, if you want to express your views, debate on a topic, share knowledge or voice out, this is the App for you.
To test this this application check the demo [Here](https://twocent.herokuapp.com/) or follow the #installation process to run it on your local machine

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/6/installation#installation)


Clone the repository

    git clone git@github.com:Vetjurv4/twocent.git

Switch to the repo folder

    cd twocent

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git@github.com:Vetjurv4/twocent.git
    cd twocent
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve
	

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.
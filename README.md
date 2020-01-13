# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.


'''''''Requirements'''''''

1. PHP 7.2.26 installed on your personal computerto run this web application

''''''Framework''''''''''
I used the PHP cake to connect to the API given (Zomato)

''''''Functionalities'''''''''
1. Display all the availalable restaurants in the city searched
2. Details of the restaurant such as name, location
3. Ratings and reviews from users
4. Display the restaurant full details from the API (Zomato)

''''''How to search''''''''
* One the home page enter a city name
* I there is data corresponding the entered city it will display 20 restaurants in that location
* Each displayed restaurant hasa corresponding image if available, name, location and a small logo.
* Click on the prefered restaurant to see the full details such as cuisine, currency, menu and price range.
* On the top bar tab you can see the ratings from different users.Time to seehow credible is the chosen restaurants.

'''''Limitations due less amount of time'''''
* The website is unfortunately fully responsive.
* Some misadjustment on pages.
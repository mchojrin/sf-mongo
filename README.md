# Sf-MongoDB

This project is a Proof of Concept to show how to integrate a MongoDB into a Symfony application

## Details

The project is built using:

* PHP 8.1
* Symfony 6.0
* MongoDB server 3.6.8

## Installation

Before running the project make sure you have all the dependencies installed.

Run `sudo apt install php-mongodb` or similar to get the php driver for MongoDB, then run `composer install` to have all the project dependencies in place.

## How to run

To run the project you need a PHP web server. The built-in one will do just fine.

Run the following command at the project root:

`php -S localhost:8000 -t public`

And then open a browser window at `http://localhost:8000/memes`.

If you have any questions you can email me at [mauro.chojrin@leewayweb.com](mailto:mauro.chojrin@leewayweb.com).
[![StyleCI](https://styleci.io/repos/3430559/shield?branch=master)](https://styleci.io/repos/3430559)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/delfimov/GDImage/blob/master/LICENSE)

# Supernano

Ultralightweight lightspeed fast supersmallsize
unbelievable easy to use best in class PHP framework.

## Requirements
 
 * [PHP >= 5.4](http://www.php.net/) (though, I highly recommend to use PHP 7) 
 * [Composer](https://getcomposer.org/download/)
 * [Nginx](https://nginx.ru) or [Apache](https://httpd.apache.org/) (mod_rewrite is required) or whatever web server you like. 

## Installation

 * Set up your web server
 * Run `composer create-project supernano/skeleton my_project_name`
 * See https://github.com/supernano/skeleton for more details  

## How to use

### Templates 
 * Templates are stored in `tpl` directory
 * `tpl/super/layout.php` is a basic template for you web site
 * See `tpl/*` for examples.
 
### Routing  

 * Template name without `.php` extension is a first part of URL-path. 
 * Allowed template name is `/[a-z0-9_-]+/`.
 * Default template (requests with empty URL-path like ``http://www.example.com/`) is `tpl/index.php`.
 * If requested template is not exists, `tpl/super/error404.php` will be used insted ("Error 404 - Page not found" page).
   
Let's say we have a request like `http://www.example.com/whatever`.

This means template name is *whatever*, the framework will look for 
`tpl/whatever.php` and include it in `tpl/super/layout.php` file.
 
If `tpl/whatever.php` is not exists,  `tpl/super/error404.php` will be used.

Request `http://www.example.com/what/ever` will look for `tpl/what.php`, 
URL-path will be stored in `$this->request` array (`[0 => 'ever']` in this case). 


### Advanced use

If you want to use this framework with dependencies, 
use composer autoload and uncomment line #6 in `web/index.php`.

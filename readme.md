<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Blog Application with PHP using Laravel as a framework

This blog application is based on the MVC pattern. For the views the blade engines templates were implemented. The models are persisted into a MySQL data base 
using the Eloquent ORM provided by Laravel. Finally, the controller and the routing were defined using PHP notation.

## Dependencies and installations needed


```
composer require doctrine/dbal
```


Laravel Collective
Maintain Laravel components that have been removed from the core framework. In this particular project this packages are needed for implementing 
the form notations use in the views

```
composer require "laravelcollective/html":"^5.4.0"
```
https://laravelcollective.com/docs/master/html



CKEditor Package
```
composer require unisharp/laravel-ckeditor
```

```
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
```


https://github.com/UniSharp/laravel-ckeditor 


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

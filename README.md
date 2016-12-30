Slim Facades
============
Introdution
-----------
SlimFacades is a package to provide facades for Slim PHP framework.  

Facades is a noun from Laravel(also a PHP Framework).  Facades provide a
 "static" interface to classes that are available in the application's service 
 container.
 
Laravel facades serve as "static proxies" to underlying classes in the service 
container, providing the benefit of a terse, expressive syntax while maintaining
more testability and flexibility than traditional static methods, so does 
Slim-Facades.

Requirement
-----------
+ PHP >= 5.5.0
+ Slim >= 3.0

Installation
------------
Using composer:<br>
`composer require zhangshize/slim-facades`

Usage
-----
After the installation, you can update your code like this:
```php
    //... Something not important ...
    use SlimFacades\Facade;
    use SlimFacades\Route;
    use SlimFacades\App;
    
    $app = new \Slim\App(/*...*/);
    // initialize the Facade class
    Facade::setFacadeApplication($app);
    
    Route::get('/', function (Request $req, Response $res) {
        $res->getBody()->write("Hello");
        return $res;
    });
    
    App::run();
```

Hechizo
=======

Online Shop
Hechizo is a online shop about clothes.

It have been created with intention to learn about Symfony2 framework 
following Javier Eigluz's book ('Desarrollo Web Ágil con Symfony2 ').

Currently this project is in a development stage. For that reason the styles and more feature will be added soon.

How install:
=======
If you want try the Task Manager  should be the following step: 

1) Clone the project: 
```
git@github.com:ancarebeca/Hechizo.git
```

2) Install vendors: 
```
composer install
```
3) Setup the config of the database 
```
Hechizo/app/config/parameters.yml
```
4) Create the schema of the database with the command:
```
php app/console doctrine:schema:create
``` 
5) Load test data with the following commands:
```
php app/console doctrine:fixtures:load 
```
6) If you have a problem, clean the cache: 
```	
Development environment: php app/console cache:clear
Production environment: php app/console cache:clear --env=prod
```
7) Run the server:
```
php app/console server:run
```
8) Visit the link:
```
http://localhost:8000/
```

Documentation
=======
https://github.com/javiereguiluz/Cupon
http://symfony.es/libro/
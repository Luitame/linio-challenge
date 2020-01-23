# Linio Challenge

Install dependencies

```
docker-compose run --rm app composer install
```

Run tests

```
docker-compose run --rm app vendor/bin/phpunit
```

> To see the tests report [click here](http://localhost:9000/)

Run application

```
docker-compose run --rm app php index.php
```

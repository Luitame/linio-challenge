setup:
	docker-compose up -d
	docker-compose run --rm app composer install

start:
	docker-compose up -d
	docker-compose run --rm app php index.php

test:
	docker-compose up -d
	docker-compose run --rm app vendor/bin/phpunit

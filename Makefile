.PHONY: phpunit

phpunit:
	docker exec -it php-fpm /var/www/laravel/vendor/bin/phpunit -c /var/www/laravel/phpunit.xml

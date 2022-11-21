fix:
	./vendor/bin/php-cs-fixer fix app
	./vendor/bin/php-cs-fixer fix tests
test:
	./vendor/bin/phpstan analyze ./app
	./vendor/bin/phpunit

format:
	./vendor/bin/php-cs-fixer fix .
	./vendor/bin/php-cs-fixer fix views/
	./vendor/bin/php-cs-fixer fix  models/
	./vendor/bin/php-cs-fixer fix  controllers/

serv:
	php -S localhost:8080
# non fonctionel pour le moment...

update:
	composer install
	php bin/console doctrine:migrations:migrate -n
.PHONY: update

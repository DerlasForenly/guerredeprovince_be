DC := docker-compose exec
FPM := $(DC) php-fpm
ARTISAN := $(FPM) php artisan
MYSQL := $(DC) -T mysql
YARN := $(DC) node yarn

ssh:
	@$(FPM) sh

start:
	@docker-compose up -d

stop:
	@docker-compose down

env:
	cp ./.env.example ./.env

keygen:
	@$(ARTISAN) key:generate

truncate:
	@$(ARTISAN) db:wipe

migrate:
	@$(ARTISAN) migrate

fresh:
	@$(ARTISAN) migrate:fresh

seed:
	@$(ARTISAN) db:seed

reset-db: truncate migrate seed

install:
	@$(FPM) composer install

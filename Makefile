DC := docker-compose exec
FPM := $(DC) php-fpm
OC := $(DC) gdp_octane
ARTISAN := $(FPM) php artisan
MYSQL := $(DC) -T mysql
YARN := $(DC) node yarn

ssh:
	@$(FPM) sh

ssh-oc:
	@$(OC) sh

nginx-reload:
	@docker exec -it gdp_nginx service nginx reload

build:
	@docker-compose up -d --build

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

restart: stop start

install:
	@$(FPM) composer install

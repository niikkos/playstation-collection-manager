DOCKER_COMPOSE = DOCKER_BUILDKIT=1 docker-compose

start:
	$(DOCKER_COMPOSE) up -d --remove-orphans --no-recreate

stop:
	$(DOCKER_COMPOSE) stop

php: ## enter the webserver container
	$(DOCKER_COMPOSE) exec php-fpm sh

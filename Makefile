.PHONY: help up down restart logs status cli install clean

help:
	@echo "WordPress Starter Kit - Available Commands"
	@echo "=========================================="
	@echo "make up        : Boot up all Docker services in background"
	@echo "make down      : Stop and remove containers"
	@echo "make restart   : Restart all containers"
	@echo "make logs      : Stream live container logs"
	@echo "make status    : Show running containers and ports"
	@echo "make cli CMD=..: Run WP-CLI commands (e.g. make cli CMD='plugin list')"
	@echo "make install   : Automated one-step WordPress installation"
	@echo "make clean     : Stop containers and delete database volumes"

up:
	docker compose up -d

down:
	docker compose down

restart:
	docker compose restart

logs:
	docker compose logs -f

status:
	docker compose ps

cli:
	docker compose run --rm wp-cli $(CMD)

install:
	docker compose run --rm wp-cli core install \
		--url="http://localhost:8086" \
		--title="WordPress Starter Kit" \
		--admin_user="admin" \
		--admin_password="admin123" \
		--admin_email="admin@starter.local" \
		--skip-email

clean:
	docker compose down -v

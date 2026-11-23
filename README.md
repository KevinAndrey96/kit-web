# WordPress Containerized Starter Kit (wordpress-starter-kit)

[![WordPress](https://img.shields.io/badge/WordPress-6.x%20Ready-21759B?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![MariaDB](https://img.shields.io/badge/MariaDB-10.11-003545?style=for-the-badge&logo=mariadb&logoColor=white)](https://mariadb.org)
[![Docker](https://img.shields.io/badge/Docker-Compose-2496ED?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com)
[![WP-CLI](https://img.shields.io/badge/WP--CLI-Integrated-11a0d2?style=for-the-badge&logo=wordpress&logoColor=white)](https://wp-cli.org)
[![Mailpit](https://img.shields.io/badge/Email-Mailpit-e05d44?style=for-the-badge)](https://github.com/axllent/mailpit)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge)](LICENSE)

A modern, developer-first, containerized **WordPress Starter Kit and Local Development Environment**. Engineered for developers, agencies, and freelancers to prototype, build, and test custom themes, plugins, and scalable client sites with zero host dependencies.

---

## 🌟 What is Included in the Box?

- **Containerized WordPress (PHP 8.2 Apache):** High-performance core container pre-configured with `mod_rewrite`, upload limits (256M/512M), and standard GD/Imagick extensions.
- **MariaDB 10.11 Database:** Fast, reliable relational database with automated Docker healthchecks and persistent storage volumes.
- **Visual Database Management (phpMyAdmin 5.2):** Pre-linked web interface for visual table inspection, running queries, and database exports.
- **Local Email Interceptor (Mailpit):** Zero-configuration local SMTP server (port 1025) and beautiful web UI (port 8025) to preview outgoing transactional emails, password resets, and contact form submissions without external SMTP credentials.
- **Integrated WP-CLI Container:** Execute any WordPress CLI command (install plugins, generate dummy content, run migrations, manage users) directly through Docker without installing PHP or WP-CLI on your machine.
- **Dynamic & Safe `wp-config.php`:** Automatically detects host names and ports (`$_SERVER['HTTP_HOST']`), reverse proxy SSL termination (`HTTP_X_FORWARDED_PROTO`), and binds environment variables cleanly.
- **Agency Assets & Tools:** Includes Betheme core, Slider Revolution, and Contact Form 7 scaffolding ready for rapid agency development.

---

## 🏗️ Architecture & Service Topology

```
+-------------------------------------------------------------+
|                      Host Machine                           |
+-------------------------------------------------------------+
     |                  |                   |               |
     | Port 8086        | Port 8087         | Port 8025     | WP-CLI
     v                  v                   v               v
+-------------+   +-------------+   +-------------+   +-------------+
|  WordPress  |   | phpMyAdmin  |   |   Mailpit   |   |   WP-CLI    |
|  (PHP 8.2)  |   | (Admin UI)  |   | (Email UI)  |   | (Container) |
+-------------+   +-------------+   +-------------+   +-------------+
        |                 |                                  |
        +--------+--------+----------------------------------+
                 | TCP / Port 3306
                 v
        +-----------------------+
        |   MariaDB (10.11)     |
        |   Persistent DB Data  |
        +-----------------------+
```

---

## 🚀 Quick Start (Automated Setup)

### 1. Clone the Repository
```bash
git clone git@github.com:KevinAndrey96/wordpress-starter-kit.git
cd wordpress-starter-kit
```

### 2. Boot the Docker Stack
```bash
make up
# or using standard docker command:
docker compose up -d
```

### 3. Automated WordPress Installation (One Command)
Run the automated installation script via WP-CLI to create the database schema and default administrator:
```bash
make install
```

This immediately configures:
- **Site URL:** [http://localhost:8086](http://localhost:8086)
- **Admin Dashboard:** [http://localhost:8086/wp-admin](http://localhost:8086/wp-admin)
- **Username:** `admin`
- **Password:** `admin123`
- **Email:** `admin@starter.local`

---

## 🌐 Application Endpoints & Ports

| Service | Port | Description |
| :--- | :--- | :--- |
| **WordPress Storefront** | [http://localhost:8086](http://localhost:8086) | Main website frontend |
| **WordPress Admin** | [http://localhost:8086/wp-admin](http://localhost:8086/wp-admin) | WP-Admin management dashboard |
| **phpMyAdmin** | [http://localhost:8087](http://localhost:8087) | Database management interface |
| **Mailpit Web UI** | [http://localhost:8025](http://localhost:8025) | Local inbox for intercepted emails |
| **Mailpit SMTP Server** | `localhost:1025` | Local SMTP relay for plugins & mailers |

---

## 🛠️ Developer Makefile Commands

The included `Makefile` provides convenient shortcuts for common container and WP-CLI tasks:

```bash
# Start all containers in the background
make up

# Stop all containers
make down

# View real-time container logs
make logs

# Check container health and status
make status

# Execute WP-CLI commands
make cli CMD="plugin list"
make cli CMD="theme list"
make cli CMD="user list"

# Install a plugin from the WordPress repository
make cli CMD="plugin install woocommerce --activate"

# Export the database
make cli CMD="db export backup.sql"

# Clean containers and wipe database volumes
make clean
```

---

## ⚙️ Environment Variables Reference

You can customize ports and credentials via an optional `.env` file (copied from `.env.example`):

| Variable | Default Value | Description |
| :--- | :--- | :--- |
| `WORDPRESS_PORT` | `8086` | Exposed host port for WordPress |
| `PHPMYADMIN_PORT` | `8087` | Exposed host port for phpMyAdmin |
| `MAILPIT_WEB_PORT` | `8025` | Exposed host port for Mailpit Web UI |
| `WORDPRESS_DB_NAME` | `starter_db` | MySQL / MariaDB database name |
| `WORDPRESS_DB_USER` | `starter_user` | Database user account |
| `WORDPRESS_DB_PASSWORD` | `starter_password` | Database password |
| `WP_DEBUG` | `true` | Enables WordPress debug logs |

---

## 👨‍💻 Author

- **Kevin Andrey Herrera Silva**
- GitHub: [@KevinAndrey96](https://github.com/KevinAndrey96)
- Email: `kahs_kevin@hotmail.com`

---

## 📄 License

This starter kit is open-source software licensed under the **MIT License**.

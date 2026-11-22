# Turnkey WordPress Corporate Business & Agency Starter Template

[![WordPress](https://img.shields.io/badge/WordPress-Ready-21759B?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-8.1%20%7C%208.2-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![MariaDB](https://img.shields.io/badge/MariaDB-10.11-003545?style=for-the-badge&logo=mariadb&logoColor=white)](https://mariadb.org)
[![Docker](https://img.shields.io/badge/Docker-Compose-2496ED?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com)
[![Betheme](https://img.shields.io/badge/Theme-Betheme%20Premium-FF6C37?style=for-the-badge)](https://muffingroup.com/betheme/)
[![Slider Revolution](https://img.shields.io/badge/Slider-Revolution-E03A3E?style=for-the-badge)](https://revolution.themepunch.com/)

A ready-to-deploy turnkey WordPress starter kit and corporate website template equipped with the premium **Betheme** engine, **Slider Revolution**, and **Contact Form 7**. Designed as an enterprise-grade scaffolding for software agencies, digital marketing consultancies, technology providers, and corporate service firms.

---

## 🌟 Key Highlights & Template Features

- **Betheme Framework Scaffolding**: Built-in responsive grid system, 600+ Google Fonts, custom CSS/JS injectors, customizable header styles, mega menus, and mobile off-canvas navigation.
- **Cinematic Presentation Layers**: Pre-installed Slider Revolution with hardware-accelerated transitions and interactive banner modules.
- **Customer Inquiry Automation**: Fully integrated Contact Form 7 workflows with customized lead generation fields and anti-spam handling.
- **Instant Local Dockerization**: Complete Docker Compose setup spinning up WordPress (PHP 8.2), MariaDB 10.11, and phpMyAdmin in one command.
- **Dynamic Environment Binding**: `wp-config.php` engineered to read containerized environment variables with automatic local fallbacks.

---

## 🏗️ Architecture & Component Topology

```
+-------------------------------------------------------------+
|                     Client Browser                          |
+-------------------------------------------------------------+
                              | HTTP (Port 8086)
                              v
+-------------------------------------------------------------+
|              WordPress App Container (PHP 8.2)              |
|  - WordPress Core Framework                                 |
|  - Betheme Responsive Multi-Purpose Engine                  |
|  - Visual Hero Slider Engine (Slider Revolution)            |
|  - Contact & Lead Forms (Contact Form 7)                    |
+-------------------------------------------------------------+
                              | TCP / MySQL protocol
                              v
+-------------------------------------------------------------+
|              Database Service (MariaDB 10.11)               |
|  - Schema: kitweb_wp                                        |
|  - Container Healthcheck with InnoDB auto-detection         |
+-------------------------------------------------------------+
                              |
                              v
+-------------------------------------------------------------+
|              phpMyAdmin Service (Port 8087)                 |
|  - Visual management of tables, options, and taxonomies     |
+-------------------------------------------------------------+
```

---

## 🚀 Quick Start with Docker Compose

Run the entire corporate WordPress portal locally with zero dependencies:

### 1. Clone the Repository
```bash
git clone git@github.com-personal:KevinAndrey96/kit-web.git
cd kit-web
```

### 2. Launch the Stack
```bash
docker compose up -d
```

### 3. Complete Initial Setup or Access
- **Website Frontpage**: [http://localhost:8086](http://localhost:8086)
- **WordPress Admin**: [http://localhost:8086/wp-admin](http://localhost:8086/wp-admin)
- **phpMyAdmin**: [http://localhost:8087](http://localhost:8087) (Server: `db`, User: `kitweb_user`, Password: `kitweb_password`)

---

## 💻 Manual Deployment (LAMP / cPanel / Shared Hosting)

1. Upload all repository files to your server web root (`public_html/` or `/var/www/html/`).
2. Create a MySQL/MariaDB database in your hosting control panel.
3. Configure your database connection in `wp-config.php` or export environment variables:
   ```php
   define( 'DB_NAME', 'your_db_name' );
   define( 'DB_USER', 'your_db_user' );
   define( 'DB_PASSWORD', 'your_db_password' );
   define( 'DB_HOST', 'localhost' );
   ```
4. Open your domain URL in your browser to run the 1-minute WordPress setup wizard and activate your chosen Betheme layout.

---

## 📦 Installed Plugins & Themes

| Component | Category | Purpose | Status |
| :--- | :--- | :--- | :---: |
| **Betheme** | Premium Theme | Responsive layout engine, mega menus, typography | Active |
| **Slider Revolution** | Premium Plugin | Layered animated banners, touch-swipe sliders | Active |
| **Contact Form 7** | Plugin | Contact forms, feedback handling, lead capture | Active |

---

## 🛡️ License & Attributions

- WordPress core is licensed under the **GNU General Public License v2 or later**.
- Custom layout modifications, configuration scripts, and template structuring are maintained for developer portfolio demonstration and deployment template usage.

# Merviq Technologies website

PHP 8.2 corporate site with responsive Bootstrap 5 layout, organised in MVC format.

## Run locally

From this folder run `php -S localhost:8000`, then open `http://localhost:8000`.

## Project structure

- `app/Controllers` handles page and form requests.
- `app/Models` contains database entities and persistence logic.
- `app/Views` contains layouts and page templates.
- `app/Core` contains the router, view renderer and database connection service.
- `index.php` is the front controller that registers routes.

## Contact form database

1. Run `database.sql` on MySQL.
2. Copy `config.example.php` to `config.php` and set your database credentials.

Without `config.php`, the contact form still displays its confirmation screen but does not persist submissions.

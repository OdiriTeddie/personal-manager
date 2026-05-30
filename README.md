# TaskFlow PHP Playground

TaskFlow is a plain PHP learning project for building a small productivity app without a framework. The goal is to practice low-level PHP concepts first, then rebuild similar ideas in a cleaner PHP version and eventually a Laravel version with more advanced implementation details.

This repository is intentionally public as a learning journal and portfolio project. It shows the process of building authentication, routing, database access, controllers, views, and feature workflows from the ground up.

## Project Goals

- Practice plain PHP request handling without a framework.
- Learn how routing, controllers, sessions, redirects, and PDO fit together.
- Build UI screens first, then wire real PHP logic incrementally.
- Keep the code understandable for someone reviewing the learning process.
- Use this as a baseline before rebuilding the same product with better structure and later with Laravel.

## Current Scope

The app is a productivity workspace with static and partially wired screens for:

- Landing page
- Register and login pages
- Dashboard
- Tasks list, create, edit, and delete screens
- Notes list, create, detail, edit, and delete screens
- Categories page
- Settings page

Some screens are static Tailwind scaffolds. Task creation and task listing are being wired with plain PHP and PDO.

## Tech Stack

- PHP
- MySQL
- PDO
- Plain PHP views
- Tailwind CSS v4 CLI
- Herd/local PHP development environment

## Project Structure

```text
app/
  controllers/        Request handlers and feature controllers
  views/              Plain PHP view files
config/
  database.php        PDO database connection
public/
  index.php           Front controller and simple router
  assets/css/app.css  Compiled Tailwind CSS
resources/
  css/app.css         Tailwind source file
storage/              Local runtime/storage area
```

## Getting Started

Clone the repository and install frontend dependencies:

```bash
npm install
```

Copy the environment example:

```bash
cp .env.example .env
```

Update your database values:

```env
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=personal-manager
DB_USERNAME=root
DB_PASSWORD=
```

Build Tailwind CSS:

```bash
npm run build:css
```

For active UI work, run:

```bash
npm run watch:css
```

Serve the app with `public/` as the document root. For example:

```bash
php -S localhost:8000 -t public
```

Then visit:

```text
http://localhost:8000
```

## Development Notes

This project deliberately avoids a framework so the lower-level pieces are visible. That means some patterns are intentionally simple:

- `public/index.php` acts as a basic router.
- Controllers prepare data and require views.
- Views are plain PHP files.
- Sessions are used for auth and short-lived messages.
- Database records should be read from the database instead of being stored long-term in session.

As the project grows, the same features can be refactored into a more organized plain PHP version, then rebuilt in Laravel.

## Roadmap

- Complete task CRUD with real user ownership.
- Replace hardcoded user IDs with authenticated session user IDs.
- Add flash messages and validation display.
- Wire notes CRUD.
- Add categories CRUD.
- Improve shared layouts and partials.
- Add database migrations or schema documentation.
- Rebuild the project in a more structured plain PHP repo.
- Build a Laravel version with richer features.

## License

This project is open source under the MIT License. See [LICENSE](LICENSE).

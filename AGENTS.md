# OdontologiaApp - Laravel 13 Application

## Quick Commands

```bash
# Full setup (run once)
composer setup

# Start dev server + Vite (single command)
composer dev

# Run tests (uses in-memory SQLite)
composer test

# Format code
./vendor/bin/pint

# Build assets for production
npm run build
```

## Project Structure

- **Framework**: Laravel 13.x, PHP 8.3+
- **Database**: SQLite (`database/database.sqlite`) for dev; in-memory for tests
- **Frontend**: Vite + Sass, Tabler admin template (`takielias/tablar`)
- **Auth**: Laravel Breeze-style scaffolding (login, register, password reset, email verification, profile)
- **Queue/Cache/Session**: Database driver (configured in `.env`)

## Key Conventions

- **Routes**: `routes/web.php` (web), `routes/api.php` (API)
- **Controllers**: `app/Http/Controllers/` - resourceful where possible
- **Models**: `app/Models/` - uses Eloquent with factories in `database/factories/`
- **Requests**: Form requests in `app/Http/Requests/` for validation
- **Views**: Blade templates in `resources/views/` (Tabler layout)
- **Assets**: Entry at `resources/js/app.js`, styles in `resources/sass/tabler.scss`

## Testing

- PHPUnit with two suites: `Unit` and `Feature`
- Test env uses `:memory:` SQLite, `array` cache/session/queue
- Run single test: `./vendor/bin/phpunit --filter=TestName`
- Run single suite: `./vendor/bin/phpunit --testsuite=Feature`

## Environment

- Copy `.env.example` to `.env` and run `php artisan key:generate`
- Key env vars: `DB_CONNECTION=sqlite`, `SESSION_DRIVER=database`, `QUEUE_CONNECTION=database`, `CACHE_STORE=database`
- `VITE_APP_NAME` exposed to frontend via Vite

## Gotchas

- `composer dev` runs `php artisan dev` (serves on port 8000) - not `php artisan serve`
- Vite HMR requires `npm run dev` in separate terminal (or use `concurrently` via `composer dev`)
- Tabler Sass deprecation warnings suppressed in `vite.config.js`
- No Pest - uses plain PHPUnit (see `phpunit.xml`)
- SQLite file at `database/database.sqlite` is gitignored
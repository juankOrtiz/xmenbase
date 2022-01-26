# X-Men Base

## About

X-Men Base is a Laravel web application made to track X-Men comics reading orders and stories. The goals of the projects are:

- Give new readers orientation about the X-Men publishing history.
- Help readers select the best reading order to fit their needs.
- Keep track of stories read
- Discover stories or comic book series.

## Technologies used

- **Laravel v8** as the base framework.
- **Tailwind CSS v3** as the CSS and frontend framework.
- **MySQL** as the database of choice (but every database supported by Laravel should work on new instalations).

## Installation

### Prerequisites

To run this project on a local computer you need to have installed:

- A local development server with PHP: these days I'm using [AMPPS](https://ampps.com/)
- The [Composer](https://getcomposer.org/) package manager for PHP.
- [Laravel](https://laravel.com)
- [Git](https://git-scm.com/)
- A database of choice: [MySQL](https://www.mysql.com/) (recommended), [PostgreSQL](https://www.postgresql.org/), etc.
- A terminal/console (system default is fine).

### Installation steps

- Clone this Github repository: `git clone https://github.com/juankOrtiz/xmenbase.git`
- Change to the newly created repository: `cd xmenbase`.
- Install the Composer dependencies: `composer install`.
- Install NPM dependencies: `npm install`.
- Make a copy of the file `.env.example` and rename it to `.env`.
- Open your database server and create a new database called `xmenbase`.
- Change the credentials in the `.env` file to the respective values of your database server:
  - `DB_HOST=127.0.0.1`
  - `DB_DATABASE`
  - `DB_USERNAME`
  - `DB_PASSSWORD`
  - `APP_NAME=XmenBase`
- Generate a new application key: `php artisan key:generate`.
- Run migrations to create tables and seed them: `php artisan migrate --seed`.
- Launch the Laravel built-in server: `php artisan serve`.
- Open your browser and visit `localhost:8000`.

## License

X-Men Base is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

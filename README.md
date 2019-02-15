# Laravel ToDo App

This is a simple Todo app.

## Installation

Clone the repository-

```
git clone https://github.com/egv301/todoProjectLaravel

```

Then cd into the folder with this command-
```
cd todoProjectLaravel

```

Then do a composer update

```
composer update

```
Then rename `.env.example` file to `.env`

Then edit `.env` file. Set `DB_DATABASE = todo`, `DB_USERNAME=root, 'DB_PASSWORD=''`

Then create a database named `todo` and then do a database migration using this command-

```
php artisan migrate

```
Then type in `php artisan key:generate`


## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Ask a question?

If you have any quesions please contact at egv301@gmail.com

# Calendar

This is a Laravel Livewire calendar based
on [asantibanez/livewire-calendar](https://github.com/asantibanez/livewire-calendar)

This is a Laravel 8 side project to experiment with Livewire 2 calendar options.

## Requirements

This is a Laravel 8 project with Livewire 2 and Tailwind installed. The installation is similar to a new Laravel
project.

- [PHP 7.3 or 7.4 or 8.0+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)

Recommended:

- [Git](https://git-scm.com/downloads)

## Clone

See [Cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to create a
local copy of this project on your computer.

e.g.

```sh
git clone git@github.com:Pen-y-Fan/calendar.git
```

### Install the Dependencies

Install all the dependencies using composer

```sh
cd calendar
composer install
npm install
npm run dev
```

### Create an .env file

Create an `.env` file from `.env.example`

```shell script
composer post-root-package-install
```

### Generate an APP_KEY

```shell script
php artisan key:generate
```

### Update the Database Settings

The Calendar demo uses an **Event** table, which can be seeded with Lorem Ipsum data from a MySQL database or Sqlite
database.

#### MySql

For MySql, create a database on your MySql server and add the settings to the
**.env** file:

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YourDatabaseName
DB_USERNAME=YourDatabaseUserName
DB_PASSWORD=YourDatabaseUserPassword
```

#### Sqlite

Alternatively create an empty sqlite database and configure Laravel to use Sqlite

##### Sqlite on Linux / Mac

```shell script
touch database/database.sqlite
```

##### Sqlite on Windows

```shell script
fsutil file createnew database/database.sqlite 0
```

#### Sqlite .env file

Edit the **.env** file, add sqlite as the DB_CONNECTION and delete all the other DB\_\* keys.

```sh
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1   }
DB_PORT=3306        }
DB_DATABASE=laravel } Delete
DB_USERNAME=root    }
DB_PASSWORD=        }
```

### Create the database

Run the following command to create the database, you choose in your `.env` file and seed the tables with Lorem Ipsum
data:

```shell script
php artisan migrate --seed
```

### Sqlite in Memory Testing Database

The `phpunit.xml` file has been configured for Sqlite in memory testing. This requires the pdo_sqlite extension to be
enabled in your `php.ini`. If there are any problems enabling the extension remove the following lines, PHPUnit will
then to use the database configured in your `.env` file.

```xml

<server name="DB_CONNECTION" value="sqlite"/>
<server name="DB_DATABASE" value=":memory:"/>
```

### Run all tests

To make it easy to run all the PHPUnit tests a composer script has been created in composer.json. From the root of the
projects, use `composer test` or `composer tests`

```shell script
composer tests
```

### Serve website

To use the php web server, run the following artisan command:

```shell script
php artisan serve
```

### Open the website

See the message under the serve command for the website name and port, by default it is:

- <http://127.0.0.1:8000>

**Calendar** will display, with links to the examples from the Livewire site.

## Contributing

This is a **personal project**. Contributions are **not** required. Anyone interested in developing this project are
welcome to fork or clone for your own use.

## Credits

* [Michael Pritchard \(AKA Pen-y-Fan\)](https://github.com/pen-y-fan).

## License

MIT License (MIT). Please see [License File](LICENSE.md) for more information.

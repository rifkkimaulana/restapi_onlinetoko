# How To Installation Ci4 RestFull API

CodeIgniter CLI Tool - Version 4.0.3 - Server-Time: 2023-12-16 18:43:12pm
+--------+----------------------------+------------------------------------------------+
| Method | Route | Handler |
+--------+----------------------------+------------------------------------------------+
| GET | produk | \App\Controllers\Produk::index |
| GET | produk/new | \App\Controllers\Produk::new |
| GET | produk/(._)/edit | \App\Controllers\Produk::edit/$1 |
| GET | produk/(._) | \App\Controllers\Produk::show/$1 |
| POST | produk | \App\Controllers\Produk::create |
| PATCH | produk/(._) | \App\Controllers\Produk::update/$1 |
| PUT | produk/(._) | \App\Controllers\Produk::update/$1 |
| DELETE | produk/(._) | \App\Controllers\Produk::delete/$1 |
| CLI | migrations/([^/]+)/([^/]+) | \CodeIgniter\Commands\MigrationsCommand::$1/$2 |
| CLI | migrations/([^/]+) | \CodeIgniter\Commands\MigrationsCommand::$1 |
| CLI | migrations | \CodeIgniter\Commands\MigrationsCommand::index |
| CLI | ci(._) | \CodeIgniter\CLI\CommandRunner::index/$1 |
+--------+----------------------------+------------------------------------------------+

## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)

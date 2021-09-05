<h1 align="center">DiscordAPI Web</h1>
<p align="center"><b>Built Using my library <a href="https://github.com/hobsRKM/PHPDiscordSDK">PHPDiscordSDK</a></b></p>
<p align="center">
<a href="https://github.com/hobsRKM/DiscordAPIWeb/actions/workflows/php.yml/badge.svg?branch=master"><img src="https://github.com/hobsRKM/DiscordAPIWeb/actions/workflows/php.yml/badge.svg?branch=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/phpdiscordsdk/phpdiscordsdk"><img src="https://img.shields.io/packagist/dt/phpdiscordsdk/phpdiscordsdk" alt="Total Downloads"></a>
</p>
## About DiscordAPIWeb

DiscordAPIWeb is a web application framework that allows you to experiment with DiscordAPI and inspect each of the response.
Allowing you to build bots faster. 
This also demonstrates on how you can communicate with discord from web panel allowing you to build rich dashboards using PHPDiscorSDK

### Requires
- PHPDiscordSDK
- Node.js >= 10
- Composer
- PHP >=7.0


````bash 
#### Install PHPDiscordSDK in the root of project
$ composer require phpdiscordsdk/phpdiscordsdk 
#### Install Project Dependencies in the root of project
$ composer install 
#### Install Socket Server Dependencies
$ cd projectroot/server/socket/ && composer install
#### Autoload clases
$ composer dump-autolaod
````

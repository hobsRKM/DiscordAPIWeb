<h1 align="center">DiscordAPI Web</h1>
<p align="center"><b>Built Using  <a href="https://github.com/hobsRKM/PHPDiscordSDK">PHPDiscordSDK</a></b></p>
<p align="center">
<a href="https://github.com/hobsRKM/DiscordAPIWeb/actions/workflows/php.yml/badge.svg?branch=master"><img src="https://github.com/hobsRKM/DiscordAPIWeb/actions/workflows/php.yml/badge.svg?branch=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/phpdiscordsdk/phpdiscordsdk"><img src="https://img.shields.io/packagist/dt/phpdiscordsdk/phpdiscordsdk" alt="Total Downloads"></a>
</p>
## About DiscordAPIWeb

DiscordAPIWeb is a web application framework that allows you to experiment with DiscordAPI and inspect each of the response.
Allowing you to build bots faster. 
This also demonstrates on how you can communicate with discord from web panel allowing you to build rich dashboards using PHPDiscordSDK

### Requires
- PHPDiscordSDK (Checkout my library <a href="https://github.com/hobsRKM/PHPDiscordSDK">PHPDiscordSDK</a>)
- Node.js >= 10
- Composer
- PHP >=7.3
- PHP >=7.3
- Laravel >=8.X 

### Demonstration
https://user-images.githubusercontent.com/11420858/132134009-b337914f-8a3c-4651-9f34-c0972597f247.mp4

### PHPDiscordSDK API Docs
- <a href="https://phpdiscordsdk.gitbook.io/">phpdiscordsdk.gitbook.io</a>

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


### Start the server
````bash 
#### In the root of project, start the bot
$ php artisan start:bot "<bot token>"
#### In the server folder, start socket server
$ cd projectroot/server/socket && node app.js
````

### APIs

Open up the browser
Ensure the PORT 3026 and 3025 are open and free
```angular2html
http://localhost/phpdiscordsdk/public
```

####  Documentation
**[Complete Docs of PHPDiscordSDK](https://phpdiscordsdk.gitbook.io/)**



> Project is Open for contributions as there are more number of APIs to be added, please feel free to fork

**Contribution Guide**

- All Pull requests should be from a Local Branch of Develop
- Be sure to check out Develop Branch
- Any other pull requests to master  or other branches will be rejected

&copy;MIT License

```
composer require illuminate/database illuminate/events
```
## add database/dbconnect.php to composer.json : autoload
```
composer dump-autoload -o
```
## populate schema with sql // db_insert_tables.php
## execute file in terminal to seed database:
```
$ php app/database/db_insert_tables.php
```
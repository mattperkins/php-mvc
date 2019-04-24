```
composer require illuminate/database illuminate/events
```
## add database/dbconnect.php to composer.json : autoload
```
composer dump-autoload
```
# LOCAL DATABASE ONLY (for Remote server refer to project:seed-db)
## populate schema with sql // db_insert_tables.php
## execute file in terminal to seed database:
```
$ php app/database/db_insert_tables.php
```
## create and populate models (table names)
## add classmap to composer.json : autoload
```
composer dump-autoload
```
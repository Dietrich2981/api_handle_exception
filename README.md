# api_handle_exception
Handle all api exception and save into database

For install:
```html
composer require dietrich/api_handle_exc
```

Add the ServiceProvider to the providers array in config/app.php
```html
Dietrich\ApiHandleExc\ApiHandleExcProvider::class,
```

Copy the package config to your local config with the publish command:
```html
php artisan vendor:publish --provider="Dietrich\ApiHandleExc\ApiHandleExcProvider"
```
And migrate
```html
php artisan migrate
```

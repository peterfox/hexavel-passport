# Hexavel Passport

Required compatibility package for installing Laravel 
Passport to a Hexavel project due to the different location of the resources folder.

Rather than adding the service provider for Laravel Passport 
you should use

```php
Hexavel\Passport\PassportServiceProvider::class,
```
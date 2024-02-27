# TIPS ::: Database Query Logging in Laravel

In Laravel, you can monitor and log database queries using the `DB::listen()` method, `DB::enableQueryLog()`, and `DB::getQueryLog()`.

## Code Snippet:

```php
DB::listen(function($sql) {
    var_dump($sql->sql, $sql->bindings);
});

DB::enableQueryLog();

DB::getQueryLog();

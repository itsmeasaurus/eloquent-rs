### Laravel Eloquent Relationships

1. **One-to-One Relationship**:
   - Use when each record in the first table (e.g., `User`) belongs to one record in the second table (e.g., `Profile`), and vice versa.
   - Example: One user has one profile.
   - Methods: `hasOne()` and `belongsTo()`.

2. **One-to-Many Relationship**:
   - Use when each record in the first table (e.g., `User`) can have multiple related records in the second table (e.g., `Post`), but each record in the second table belongs to only one record in the first table.
   - Example: One user has many posts.
   - Methods: `hasMany()` and `belongsTo()`.

3. **Many-to-Many Relationship**:
   - Use when each record in the first table (e.g., `User`) can be related to multiple records in the second table (e.g., `Role`), and vice versa.
   - Example: Users can have multiple roles, and roles can belong to multiple users.
   - Method: `belongsToMany()`.

4. **Polymorphic Relationship**:
   - Use when a model can belong to more than one other model on a single association.
   - Example: Comments can belong to posts or videos.
   - Methods: `morphTo()`, `morphMany()`, `morphOne()`, `morphToMany()`, and `morphedByMany()`.

# TIPS ::: Database Query Logging in Laravel

In Laravel, you can monitor and log database queries using the `DB::listen()` method, `DB::enableQueryLog()`, and `DB::getQueryLog()`.

## Code Snippet:

```php
DB::listen(function($sql) {
    var_dump($sql->sql, $sql->bindings);
});

DB::enableQueryLog();

DB::getQueryLog();

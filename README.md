# Laravel Learning 

## Custom Cast
__Attribute casting allow  to transform Eloquent attribute values when  retrieve or set them on model instances__

Let's do that : 
1. ```php artisan make:cast StringCast```
2.  ```
    // In model  class - 
    
    protected $casts = [
            'name' => StringCast::class,
            'created_at' => 'datetime'
        ];

3. ```
    // StringCast Class - 
    
   
   // let's say $value = 'sufia akter' ___so it'll be cast into 'Sufia Akter___
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return Str::of($value)->title();
    } 

  ```There have also set() function to casting   the value  as we want to store in DB . ```


**This custom cast process also work with another way via Accessor and Mutator in Model class** 

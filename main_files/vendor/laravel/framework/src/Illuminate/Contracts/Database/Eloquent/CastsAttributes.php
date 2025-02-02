<<<<<<< HEAD
<?php

namespace Illuminate\Contracts\Database\Eloquent;

/**
 * @template TGet
 * @template TSet
 */
interface CastsAttributes
{
    /**
     * Transform the attribute from the underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return TGet|null
     */
    public function get($model, string $key, $value, array $attributes);

    /**
     * Transform the attribute to its underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  TSet|null  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes);
}
=======
<?php

namespace Illuminate\Contracts\Database\Eloquent;

/**
 * @template TGet
 * @template TSet
 */
interface CastsAttributes
{
    /**
     * Transform the attribute from the underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return TGet|null
     */
    public function get($model, string $key, $value, array $attributes);

    /**
     * Transform the attribute to its underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  TSet|null  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes);
}
>>>>>>> 0aeda949 (Updating backend files in main_files)

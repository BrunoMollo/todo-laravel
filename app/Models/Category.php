<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @var array
     */
    protected $attributes = [];

    public function todos(): HasMany
    {
        return $this->hasMany(Todo::class);
    }
}

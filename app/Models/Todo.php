<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todo extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = ["desc", "category_id"];


    /**
     * @var array
     */
    protected $attributes = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

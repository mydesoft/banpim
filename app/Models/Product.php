<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    use UuidTrait;

    protected $fillable = [
        'name',
        'slug',
        'title',
        'description',
        'category_id',
        'tag',
        'size',
        'weight',
        'sku',
        'colour',
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

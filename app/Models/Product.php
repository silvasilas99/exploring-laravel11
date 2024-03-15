<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [ "name", "price", "category_id" ];

    /**
     * Get the category that owns the product.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongs(Category::class);
    }

    /**
     * Scope a query to only include products with price greather than $price.
     *
     * @param Builder $query
     * @param float $price
     *
     * @return void
     */
    public function scopePriceGreaterThan(Builder $query, float $price) : void
    {
        $query->where("price", ">", $price);
    }
}

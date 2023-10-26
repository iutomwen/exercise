<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
class Product extends Model
{
    use HasFactory;

    // link more images to product
    public function images():HasMany
{
    return $this->hasMany(ProductImage::class);
}


protected static function boot()
    {
        parent::boot();
        //add slug when creating product
        static::creating(function ($product) {
            //if slug exists, add number to slug
            $originalSlug = Str::slug($product->name);
            $slug = $originalSlug;
            $count = 2;

            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
            // add slug to product
            $product->slug = $slug;
        });
    }
}

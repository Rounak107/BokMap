<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'description', 'category', 
        'price', 'rating', 'reviews', 'is_new',
        'location', 'image'
    ];
    
    public function scopePopular($query)
    {
        return $query->where('rating', '>=', 4)
                     ->orderBy('reviews', 'desc');
    }
}

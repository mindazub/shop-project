<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'category_id', 'photo', 'rating'];

    protected $appends = ['rating'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function getRatingAttribute()
    {
        return ceil($this->ratings()->avg('rate'));
    }


}

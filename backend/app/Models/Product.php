<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class Product extends Model
{
    protected $fillable = ['name', 'desc', 'qty', 'price', 'slug', 'thumbnail'];

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    #[Override]
    public function getRouteKeyName()
    {
        return "slug";
    }
}

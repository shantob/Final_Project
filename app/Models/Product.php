<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function colors()
    {
        return $this->BelongsToMany(Color::class);
    }

    public function sizes()
    {
        return $this->BelongsToMany(Size::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->orderby('id', 'desc');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable')->orderby('id', 'desc');
    }

}

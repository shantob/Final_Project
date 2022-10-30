<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $date = ['deleted_date_time'];
    public function uploatedBy()
    {
        return $this->belongsTo(User::class, 'uploated_by');
    }

    /**
     * Get the parent commentable model (post or video).
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
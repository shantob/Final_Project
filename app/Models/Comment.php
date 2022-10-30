<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    // protected $date = ['deleted_date_time'];
    public function commentedBy()
    {
        return $this->belongsTo(User::class, 'commented_by');
    }

    /**
     * Get the parent commentable model (post or video).
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}

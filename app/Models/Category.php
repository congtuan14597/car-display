<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'user_id', 'title'
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}

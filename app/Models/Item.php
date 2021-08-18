<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class)->withTimestamps();
    }

    public function trips()
    {
        return $this->belongsToMany(Trip::class, 'packages')->withTimestamps();
    }
}

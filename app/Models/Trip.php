<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->belongsToMany(Item::class, 'packages')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_trips')->withTimestamps();
    }
}

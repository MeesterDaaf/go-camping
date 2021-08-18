<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function trips()
    {
        return $this->belongsToMany(Trip::class, 'categories_trips')->withPivot(['category_id', 'trip_id'])->withTimestamps();
    }
}

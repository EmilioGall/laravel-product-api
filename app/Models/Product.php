<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'price',
        'image',
        'description',
        'highlighted',

    ];

    ///// Relations /////
    public function sponsorships()
    {
        return $this->belongsToMany(Category::class);
    }
}

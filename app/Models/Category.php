<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'color',
        'description',
        'primary',

    ];

    ///// Relations /////
    public function sponsorships()
    {
        return $this->belongsToMany(Product::class, 'product_category');
    }
}

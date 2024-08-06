<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryRelations extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function books()
    {
        return $this->hasMany(Books::class);
    }
}
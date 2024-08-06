<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function collections()
    {
        return $this->hasMany(Collections::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
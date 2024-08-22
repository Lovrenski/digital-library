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

    public function collection()
    {
        return $this->hasMany(Collections::class);
    }

    public function permission()
    {
        return $this->hasMany(Permissions::class);
    }
}

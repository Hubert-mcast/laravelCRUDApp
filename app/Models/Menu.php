<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    public function wines()
    {
        return this->hasMany(Wine::class);
    }

    public function reviews()
    {
        return this->hasMany(Review::class);
    }

    protected $fillable = ['name','appetizer','main course','desert','wine pairing'];
}

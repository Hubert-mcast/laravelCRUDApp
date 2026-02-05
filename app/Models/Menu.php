<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function appetizerDish()
    {
        return $this->belongsTo(Dish::class, 'appetizer');
    }

    public function mainDish()
    {
        return $this->belongsTo(Dish::class, 'main_course');
    }

    public function dessertDish()
    {
        return $this->belongsTo(Dish::class, 'dessert');
    }

    public function wine()
    {
        return $this->belongsTo(Wine::class, 'wine_pairing');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    protected $fillable = ['name','appetizer','main_course','dessert','wine_pairing'];
}

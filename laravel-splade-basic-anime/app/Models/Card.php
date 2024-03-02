<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = "cards";
    protected $fillable = [
        'name',
        'rent',
        'volume',
        'power',
        'box',
        'fuel',
        'drive',
        'image',
        'isActive'
    ];
}

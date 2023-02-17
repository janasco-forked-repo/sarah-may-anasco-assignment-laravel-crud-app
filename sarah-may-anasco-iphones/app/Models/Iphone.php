<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iphone extends Model
{
    use HasFactory;
    protected $fillable = [
        'model',
        'released',
        'discontinued',
        'capacities',
        'processor',
        'os',
        'iphone_image'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'thumb', 'series', 'price', 'sale_date', 'description'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dollar extends Model
{
    use HasFactory;

    protected $table = 'dolar';

    protected $fillable = [
    'date',
    'value'
    ];
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiment extends Model
{
    use HasFactory;
    protected $fillable = [
        'client',
        'avance',
        'date_avance',
        'reste',
        'date_reste',
        'recut',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    use HasFactory;
    protected $fillable = [
        'client',
        'cin',
        'radio',
        'pdf',
        'phot',
        'fil',
    ];
}

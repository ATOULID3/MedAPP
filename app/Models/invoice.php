<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\client;


class invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'client',
        'date',
        'accountno',
        'reste',
        'due',
    ];
}

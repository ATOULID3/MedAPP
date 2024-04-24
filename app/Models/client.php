<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\reservation;
use App\Models\invoice;

class client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'email',
        'phone',
        'address',
    ];
}

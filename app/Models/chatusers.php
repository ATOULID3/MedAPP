<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chatusers extends Model
{
    use HasFactory;
    protected $fillable = [
        'from',
        'to',
        'Subject',
    ];
}

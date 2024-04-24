<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\client;



class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'client',
        'date_debut',
        'avance',
        'reste',
    ];

    public function clients(){
        return $this->belongsTo(client::class,"id");
    }
}

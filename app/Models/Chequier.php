<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chequier extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'datedubet',
        'datefin',
        'numero_dubet',
        'numero_fin',
        'id_compte',
       
       
    ];
}

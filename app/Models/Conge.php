<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'employe_id',
        'type_conge_id',
        'type_conge_id',
        'employe_id',
        'date_dubet',
        'date_fin',
        'jours',
    ];
}

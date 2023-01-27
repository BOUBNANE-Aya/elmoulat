<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class f_domaine extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    
    ];

<<<<<<< HEAD
    public function fournisseur(){
        return $this->hasMany(Fournisseur::class);
    }
=======
    // public function fournisseur()
    // {
    //     return $this->belongsToMany(Fornisseur::class);
    // }
>>>>>>> d85ed4493797bec2c8d2bba4447c80b462057c93
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\f_domaine;

class Fournisseur extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_fdomaine',
        'name',
        'ice',
        'phone',
        'email',
        'adress',
    ];

<<<<<<< HEAD:app/Models/Fournisseur.php
    public function fdomaine(){
        return $this->belongsTo(f_domaine::class,'id');
=======
    public function fdomaine()
    {
        return $this->hasOne(f_domaine::class);
>>>>>>> d85ed4493797bec2c8d2bba4447c80b462057c93:app/Models/Fornisseur.php
    }
}

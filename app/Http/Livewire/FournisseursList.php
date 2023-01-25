<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\f_domaine;
use App\Models\Fournisseur;

class FournisseursList extends Component
{

   





    public function render()
    {
        $fournisseurs = Fournisseur::all();
        // $fdom = f_domaine::where('id',$fournisseurs->fdomaine_id)->get();
        $f_domaines = f_domaine::all();
        return view('livewire.fournisseurs-list',['f_domaines'=>$f_domaines,'fournisseurs'=>$fournisseurs]);
    } 
}

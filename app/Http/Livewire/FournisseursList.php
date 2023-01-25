<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\f_domaine;
use App\Models\Fornisseur;

class FournisseursList extends Component
{



    public function render()
    {
        $fournisseurs = Fornisseur::all();
        $f_domaines = f_domaine::all();
        return view('livewire.fournisseurs-list',['f_domaines'=>$f_domaines,'fournisseurs'=>$fournisseurs]);
    }
}

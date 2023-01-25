<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\f_domaine;
use App\Models\Fournisseur;

class FournisseursList extends Component
{
    public $name , $ice, $adress ,$email ,$phone , $domaine;
   


    //   validation real -time
    public function updated($fields){
        $this->validateOnly($fields,[
             'name'=>'required',
             'ice' => 'numeric|max:14',
             
        ]);
    }

// save projects start
    public function saveData(){
        $this->validate([
            'name'=>'required',
            'ice'=>'numeric|digits:10',
          
        ]);
        
        $fournisseur = new Fournisseur;
        $fournisseur->nom = $this->name;     
        $fournisseur->ice = $this->ice;     
        $fournisseur->phone = $this->phone;     
        $fournisseur->adress = $this->adress;     
        $fournisseur->email = $this->email;     
        $fournisseur->fdomaine_id = $this->domaine;     
       
        $fournisseur->save();
        session()->flash('message','fournisseur bien ajouter');
        
        // for empty input fields after validation
         
        $this->name = "";
        $this->ice = "";
        $this->phone = "";
        $this->adress = "" ;
        $this->email  = "";
        $this->domaine  = "";
        
        
        $this->dispatchBrowserEvent('add');

        // for hidden the model after adding the project
        $this->dispatchBrowserEvent('close-model');
       

    }
// save project end


    public function render()
    {
        $fournisseurs = Fournisseur::all();
        // $fdom = f_domaine::where('id',$fournisseurs->fdomaine_id)->get();
        $f_domaines = f_domaine::all();
        return view('livewire.fournisseurs-list',['f_domaines'=>$f_domaines,'fournisseurs'=>$fournisseurs]);
    } 
}

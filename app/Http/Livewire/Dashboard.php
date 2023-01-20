<?php

namespace App\Http\Livewire;
use App\Models\Projet;
use Livewire\Component;

class Dashboard extends Component
{
    public $currentTab = 'home';
    public $name , $dated, $datef ,$autorisation , $superfice ,$image,$consistance ,$adress,$ville ,$titre_finance , $project_edit_id;


    public function render()
    {
        return view('livewire.dashboard', [
            'currentTab' => $this->currentTab
        ]);
    }

    public function changeTab($tab)
    {
        $this->currentTab = $tab;
    }

   
    public function updated($fields){
        $this->validateOnly($fields,[
             'name'=>'required',
             'image' => 'image|max:3024',
             'ville'=>'required',
             'datef'=>'required|date',
             'dated'=>'required|date',
        ]);
    }

// save projects start
    public function saveData(){
        $this->validate([
            'name'=>'required',
            'image'=>'required|image',
            'ville'=>'required',
            'datef'=>'required|date',
            'dated'=>'required|date',
        ]);
        
        $validatedData= $this->image->store('images/projets', 'public');
        $projet = new Projet;
        $projet->name = $this->name;     
        $projet->image = $validatedData;
        $projet->consistance = $this->consistance;
        $projet->titre_finance  = $this->titre_finance ;
        $projet->autorisation  = $this->autorisation ;
        $projet->superfice = $this->superfice;
        $projet->ville = $this->ville;
        $projet->adress = $this->adress;
        $projet->datedebut = $this->dated;
        $projet->datefin = $this->datef;
        $projet->save();
        session()->flash('message','projet bien ajouter');
        
        // for empty input fields after validation
         
        $this->name = "";
        $this->image = "";
        $this->consistance = "";
        $this->titre_finance = "" ;
        $this->autorisation  = "";
        $this->superfice = "";
        $this->ville = "";
        $this->adress = "";
        $this->dated = "";
        $this->datef = "";
        
        $this->dispatchBrowserEvent('add');

        // for hidden the model
        $this->dispatchBrowserEvent('close-model');
       

    }
// save project end
//  edit project

public function resetInputs(){
        
        $this->name = "";
        $this->image = "";
        $this->consistance = "";
        $this->titre_finance = "" ;
        $this->autorisation  = "";
        $this->superfice = "";
        $this->ville = "";
        $this->adress = "";
        $this->dated = "";
        $this->datef = "";
        $this->$this->project_edit_id = "";
}

}

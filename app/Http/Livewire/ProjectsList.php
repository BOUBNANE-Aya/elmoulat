<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Projet;

class ProjectsList extends Component
{
    public $name , $date , $project_edit_id;

    public function updated($fields){
        $this->validateOnly($fields,[
             'name'=>'required',
             'date'=>'required|date',
        ]);
    }


    public function saveData(){
        $this->validate([
             'name'=>'required',
             'date'=>'required',
        ]);
        $projet = new Projet;
        $projet->name = $this->name;
        $projet->date = $this->date;
        $projet->save();
        session()->flash('message','projet bien ajouter');
        
        // for empty input fields after validation
        $this->name = "";
        $this->date = "";
        

        // for hidden the model
        $this->dispatchBrowserEvent('close-model');

    }

//  edit project

public function resetInputs(){
         $this->name = "";
        $this->date = "";
        $this->$this->project_edit_id = "";
}

    public function editProject($id){
        $projet = Projet::where('id',$id)->first();
        $this->project_edit_id = $projet->id;
        $this->id = $projet->id;
        $this->name= $projet->name;
        $this->date = $projet->date;
        
    }
    
    public function editData(){
        $projet = Projet::where('id',$this->project_edit_id)->first();
        $projet->name = $this->name;
        $projet->date = $this->date;
        $projet->save();
        session()->flash('message','projet bien modifer');
        $this->dispatchBrowserEvent('close-model');
    }

//  delete project 

    public function deleteProject($id){
        $projet = Projet::where('id',$id)->first();
        $this->project_edit_id = $projet->id;
        $this->name= $projet->name;
        $this->date = $projet->date;
    }
    
    public function deleteData(){
        $projet = Projet::where('id',$this->project_edit_id)->first();
        $projet->delete();
        session()->flash('message','projet bien supprimer');
        $this->dispatchBrowserEvent('close-model');
    }

    public function render()
    {
        $projets = Projet::orderBy('id', 'DESC')->get();
        return view('livewire.projects-list',['projets'=>$projets])->layout('layouts.squelette');
    }
}

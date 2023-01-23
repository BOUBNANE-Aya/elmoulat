<?php

namespace App\Http\Livewire;
use App\Imports\ProjetsImport;
use Livewire\Component;
use App\Models\Projet;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class ProjectsList extends Component
{
    use WithFileUploads;

    public $name , $dated, $datef ,$autorisation , $superfice ,$image,$consistance ,$adress,$ville ,$titre_finance , $project_edit_id;
    public $exelFile;
    protected $listeners = ['saveData' => 'saveData'];

//   validation real -time
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

    public function editProject($id){
        $projet = Projet::where('id',$id)->first();
        $this->project_edit_id = $projet->id;
        $this->id = $projet->id;
        $this->name= $projet->name;
        $this->dated = $projet->datedebut;
        $this->datef = $projet->datefin;
        $this->ville = $projet->ville;
        $this->adress = $projet->adress;
        $this->consistance = $projet->consistance ;
        $this->titre_finance = $projet->titre_finance ;
        $this->autorisation  = $projet->autorisation;
        $this->superfice = $projet->superfice;
        
    }
    
    public function editData(){
        $projet = Projet::where('id',$this->project_edit_id)->first();
        $projet->name = $this->name;
        $projet->consistance = $this->consistance;
        $projet->titre_finance  = $this->titre_finance ;
        $projet->autorisation  = $this->autorisation ;
        $projet->superfice = $this->superfice;
        $projet->ville = $this->ville;
        $projet->adress = $this->adress;
        $projet->datedebut = $this->dated;
        $projet->datefin = $this->datef;
        $projet->save();
        session()->flash('message','projet bien modifer');
        $this->dispatchBrowserEvent('close-model');
    }

//  delete project start

    public function deleteProject($id){
        $projet = Projet::where('id',$id)->first();
        $this->project_edit_id = $projet->id;
        $this->name= $projet->name;
        $this->dated = $projet->datedebut;
        $this->datef = $projet->datefin;
        $this->ville = $projet->ville;
        $this->adress = $projet->adress;
        $this->consistance = $projet->consistance ;
        $this->titre_finance = $projet->titre_finance ;
        $this->autorisation  = $projet->autorisation;
        $this->superfice = $projet->superfice;
        $this->image = $projet->image ;
    }
    
    public function deleteData(){
        $projet = Projet::where('id',$this->project_edit_id)->first();
        $projet->delete();
        session()->flash('message','projet bien supprimer');
        $this->dispatchBrowserEvent('add');
        $this->dispatchBrowserEvent('close-model');
        
    }
//  delete project end
//  import project start

     public function importData(){
        $this->validate([
           
            'exelFile'=>'required|mimes:xlsx,xls',
        ]);

    

       
        // $path = file_get_contents($tt);
        
            $path= $this->exelFile->store('','app');
            Excel::import(new ProjetsImport($this->exelFile,$path),$path);
            session()->flash('message','projet bien imposter');
        
        
     }
//  import project end


    public function render()
    {
        $projets = Projet::orderBy('id', 'DESC')->get();
        return view('livewire.projects-list',['projets'=>$projets]);
    }
}

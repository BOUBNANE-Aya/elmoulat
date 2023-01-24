<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Ouvrier;

class OuvriersList extends Component
{
    use WithFileUploads;

    public $nom,$datenais,$cin,$n_cin,$datedubet,$observation,$notation,$id_ouvrier ,$contrat;

    public $checked_id=[];

   

    public function render()
    {
        $ouvriers=Ouvrier::orderBy('id','DESC')->get();
        return view('livewire.ouvriers-list',['ouvriers'=>$ouvriers]);
    }

    public function saveData(){
       
        $validatedata=$this->validate([
           'nom'=>'required',
           'datenais'=>'required|date',
           'cin'=>'mimes:pdf',
           'n_cin'=>'required',
           'datedubet'=>'required|date',
           'observation'=>'required',
           'notation'=>'required|integer',
           


        ]);
        // Ouvrier::create($validatedata);

        $cinfile=$this->cin->store('Documents/ouvrier','public');
        

        $ouvrier=new Ouvrier();
        $ouvrier->nom=$this->nom;
        $ouvrier->datenais=$this->datenais;
        $ouvrier->cin=$cinfile;
        $ouvrier->n_cin=$this->n_cin;
        $ouvrier->datedubet=$this->datedubet;
        $ouvrier->observation=$this->observation;
        $ouvrier->notation=$this->notation;
        $ouvrier->contrat=$this->contrat;
        $ouvrier->save();

        $this->resetInputs();
        session()->flash('message','Ouvrier bien ajouter');
        $this->dispatchBrowserEvent('add');

        // for hidden the model
        $this->dispatchBrowserEvent('close-model');
        


    }

    private function resetInputs(){

        $this->nom="";
        $this->datenais="";
        $this->cin="";
        $this->n_cin="";
        $this->datedubet="";
        $this->observation="";
        $this->notation="";
        $this->contrat="";

    }

    // public function editOuvrier($id){
    //     $ouvrier=Ouvrier::find($id);
    //     $this->id_ouvrier=$id;
    //     $this->nom=$ouvrier->nom;
    //     $this->datenais=$ouvrier->dateNais;
    //     $this->cin=$ouvrier->cin;
    //     $this->n_cin=$ouvrier->n_cin;
    //     $this->datedubet=$ouvrier->datedubet;
    //     $this->observation=$ouvrier->observation;
    //     $this->notation=$ouvrier->notation;

      


        
    // }


    // public function editData(){


    //     $this->validate([
    //         'nom'=>'required',
    //         'datenais'=>'required|date',
    //         'cin'=>'required',
    //         'n_cin'=>'required',
    //         'datedubet'=>'required|date',
    //         'observation'=>'required',
    //         'notation'=>'required|integer',
 
 
    //      ]);
        

    //     $ouvrier=Ouvrier::find($this->id_ouvrier);
    //     $ouvrier->update([


    //         'nom'=>$this->nom,
    //         'datenais'=>$this->datenais,
    //         'cin'=>$this->cin,
    //         'n_cin'=>$this->n_cin,
    //         'datedubet'=>$this->datedubet,
    //         'observation'=>$this->observation,
    //         'notation'=>$this->notation,

    //     ]);
    //     session()->flash('message','Ouvriers bein Upaded');
        
    //     $this->resetInputs();
    //     $this->dispatchBrowserEvent('close-model');




    // }

// delete ouvrier

    public function deleteOuvrier($id){


        $ouvrier = Ouvrier::where('id',$id)->first();
        $this->id_ouvrier = $ouvrier->id;
        $this->nom= $ouvrier->nom;
        $this->datenais = $ouvrier->datenais;
        $this->cin = $ouvrier->cin;
        $this->n_cin = $ouvrier->n_cin;
        $this->datedubet = $ouvrier->datedubet;
        $this->observation = $ouvrier->obseravtion ;
        $this->notation = $ouvrier->notation ;
        $this->contrat = $ouvrier->contrat ;
       
        


    }

    public function deleteData(){
        $ouvrier = Ouvrier::where('id',$this->id_ouvrier)->first();
        $ouvrier->delete();
        session()->flash('message','Ouvrier bien supprimer');
        $this->dispatchBrowserEvent('add');

        // for hidden the model
        $this->dispatchBrowserEvent('close-model');
    }

   //edit ouvrier=====================

    public function editOuvrier($id){
        $ouvrier = Ouvrier::where('id',$id)->first();
        $this->id_ouvrier = $ouvrier->id;
        
        $this->nom= $ouvrier->nom;
        $this->datenais = $ouvrier->datenais;
        $this->cin = $ouvrier->cin;
        $this->n_cin = $ouvrier->n_cin;
        $this->datedubet = $ouvrier->datedubet;
        $this->observation = $ouvrier->observation ;
        $this->notation = $ouvrier->notation ;
        $this->contrat = $ouvrier->contrat ;

       
        
    }

    public function editData(){
        $validatedata=$this->validate([
            'nom'=>'required',
            'datenais'=>'required|date',
            'cin'=>'required',
            'n_cin'=>'required',
            'datedubet'=>'required|date',
            'observation'=>'required',
            'notation'=>'required|integer',
 
 
         ]);
        $ouvrier = Ouvrier::where('id',$this->id_ouvrier)->first();
        $ouvrier->nom = $this->nom;
        $ouvrier->datenais = $this->datenais;
        $ouvrier->cin  = $this->cin ;
        $ouvrier->n_cin  = $this->n_cin ;
        $ouvrier->datedubet = $this->datedubet;
        $ouvrier->observation = $this->observation;
        $ouvrier->notation = $this->notation;
        $ouvrier->contrat=$this->contrat ;

        
        $ouvrier->save();
        session()->flash('message','ouvrier bien modifer');
        $this->dispatchBrowserEvent('close-model');
    }


    // check all boxs

    public function deletecheckedouvrier(){

        Ouvrier::query()->whereIn('id',$this->checked_id)->delete();
        session()->flash('message','ouvriers bien supprimer');
        // pour vider les textboxs
        $this->checked_id=[];
        
    }


   



}

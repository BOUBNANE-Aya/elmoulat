<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\f_domaine;
use App\Models\Fournisseur;


class FournisseursList extends Component
{

   




    use WithFileUploads;
    use WithPagination;

    public $name , $ice, $phone ,$email,$adress, $id_fournisseur, $id_fdomaine;
    public $excelFile;
    public $selectedfournisseur = [];
    public $selectAll = false;
    public $bulkDisabled = true;
    public $pages = 5;
    protected $listeners = ['saveData' => 'saveData'];

    public function render()
    {
     $this->bulkDisabled = count($this->selectedfournisseur) < 1;
        $fournisseurs = Fournisseur::all();
        $fdomaines=f_domaine::all();
        
        return view('livewire.fournisseurs-list',['fournisseurs'=>$fournisseurs,'fdomaines'=>$fdomaines]);
    }
    }

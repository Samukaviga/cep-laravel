<?php

namespace App\Livewire;

use App\Models\Anddress;
use Livewire\Component;
use Request;

class ViaCepEdit extends Component
{

    public $logradouro = '';
    public $anddress = [];

    public function mount()
    {   
        $id = request()->id; 
       
        $this->anddress = Anddress::find($id);

        $this->logradouro = $this->anddress['logradouro'];

    }

    public function render()
    {
        return view('livewire.via-cep-edit');
    }

    public function cepEdit(){
        return view('cep-edit');
    }
}

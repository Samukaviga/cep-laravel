<?php

namespace App\Livewire;

use Http;
use Livewire\Component;

class ViaCep extends Component
{

    public string $cep = '';
    public string $logradouro = '';
    public string $localidade = '';
    public string $estado = '';
    public string $bairro = '';


    public function updatedCep(string $value)
    {

        $response = Http::get("https://viacep.com.br/ws/$value/json/")->json();

        $this->logradouro = $response['logradouro'];
        $this->localidade = $response['localidade'];
        $this->bairro = $response['bairro'];
        $this->estado = $response['uf'];

    }


    public function mount()
    {
        // 
    }

    public function render()
    {
        return view('livewire.via-cep');
    }


    public function cep()
    {
        return view('cep');
    }

    public function save() 
    {
        dd('salvou', $this->cep);
    }
}

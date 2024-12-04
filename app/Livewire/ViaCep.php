<?php

namespace App\Livewire;

use App\Models\Anddress;
use Http;
use Livewire\Component;

class ViaCep extends Component
{
    protected array $rules = [
        'cep' => ['required'],
        'logradouro' => ['required'],
        'localidade' => ['required'],
        'uf' => ['required', 'max:2'],
        'bairro' => ['required'],
    ];

    protected array $messages = [
        'cep.required' => 'O campo cep é obrigatório',
        'lagradouro.required' => 'O campo Logradouro é obrigatório',
        'localidade.required' => 'O campo Localidade é obrigatório',
        'uf.required' => 'O campo Estado é obrigatório',
        'uf.max' => 'O campo Estado deve ter no máximo 2 caracteres',
        'bairro.required' => 'O campo Bairro é obrigatório',
    ];

    public string $cep = '';
    public string $logradouro = '';
    public string $localidade = '';
    public string $uf = '';
    public string $bairro = '';

    public $anddresses = [];


    public function updatedCep(string $value)
    {

        $response = Http::get("https://viacep.com.br/ws/$value/json/")->json();

        if ($response !== null) {

            $this->cep = $response['cep'];
            $this->logradouro = $response['logradouro'];
            $this->localidade = $response['localidade'];
            $this->bairro = $response['bairro'];
            $this->uf = $response['uf'];

        } else {

            view('livewire.via-cep');

        }
    }


    public function render()
    {
        $this->anddresses  = Anddress::all()->toArray();

        return view('livewire.via-cep');
    }


    public function cep()
    {

        $this->render(); //chama o metodo render novamente para atualizar a variavel enddresses

        return view('cep');
    }

    public function save()
    {
        $this->validate();

        Anddress::updateOrCreate(
            [
                'cep' => $this->cep // Critérios para buscar o registro
            ],
            [
                'logradouro' => $this->logradouro,  // Dados para atualizar ou criar
                'cidade' => $this->localidade,
                'bairro' => $this->bairro,
                'uf' => $this->uf,
            ]
        );

        $this->resetExcept('anddresses'); //limpa todos os campos
    }

    public function edit($id) 
    {
        dd($id);

        $this->anddresses = Anddress::find($id);

    }

    public function remove($id)
    {

        $anddress = Anddress::find($id);
       
        $anddress->delete();

        $this->render();
    } 
    

       


    
}

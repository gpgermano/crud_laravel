<?php

namespace App\Livewire;

use App\Models\Customiza;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $nome='';
    public $email='';
    public $telefone='';
    public $estrangeiro='';


    public function render()
    {
        return view('livewire.create-customer');
    }

    public function salvaCustom(){
        $valida=$this->validate([
            'nome'=>'required|max:255',
            'email'=>'required|email|unique:customizas|max:255',
            'telefone' => 'required|unique:customizas|max:255',
            'estrangeiro' => 'nullable|max:10',
        ]);

        Customiza::created($valida);
        session()->flash('success','Criado com sucesso.');

        return $this->redirect('/customizar', navigate:true);
    }
}

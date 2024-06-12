<?php

namespace App\Livewire;

use App\Models\Customiza;
use Livewire\Component;

class EditCustomer extends Component
{
    public $customer;
    public $nome;
    public $email;
    public $telefone;
    public $estrangeiro;

    public function mount(Customiza $customer){
        $this->customer=$customer;
        $this->nome=$customer->nome;
        $this->email=$customer->email;
        $this->telefone=$customer->telefone;
        $this->estrangeiro=$customer->estrangeiro;
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function updateCustomer(){
        $valida=$this->validate([
            'nome'=>'required|max:255',
            'email'=>'required|email|max:255',
            'telefone'=>'required|max:255',
            'estrangeiro'=>'required|boolean',
        ]);

        $this->customer->update($valida);
        session()->flash('success','Atualizado com sucesso.');

        return $this->redirect('/customizar', navigate:true);
    }
}

<?php

namespace App\Livewire;

use App\Models\Customiza;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Customers extends Component
{
    public $customers=[];

    public function mount() {
        $this->customers=Customiza::all();
    }

    public function render()
    {
        return view('livewire.customers');
    }

    public function deletaCustomizacao(Customiza $customer){
        $customer->delete();
        session()->flash('success','Deletado com sucesso.');

        return $this->redirect('/customizar', navigate:true);
    }
}

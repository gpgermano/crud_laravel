<?php

namespace App\Livewire;

use App\Models\Customiza;
use Livewire\Component;

class ViewCustomer extends Component
{

    public $customer=[];

    public function mount(Customiza $customer){
        $this->customer=$customer;
    }

    public function render()
    {
        return view('livewire.view-customer');
    }
}

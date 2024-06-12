<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $nome;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.register');
    }

    public function lojaUsuario(){
        $valida=$this->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        $user=User::created([
            'nome' =>$this->nome,
            'email' =>$this->email,
            'password' =>bcrypt($this->password),
        ]);

        Auth::login($user);
        session()->flash('success', 'Registrado com sucesso');

        return $this->redirect('/customizar', navigate:true);
    }


}

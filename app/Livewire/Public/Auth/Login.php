<?php

namespace App\Livewire\Public\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.public.auth.login');
    }
    public function rules(){
        return[
            'email'=>'required|email',
            'password'=>'required|min:8'
        ];
    }
    public function login(){
        $this->validate();
        $credentials = ['email'=>$this->email,'password'=>$this->password];
        if(Auth::attempt($credentials)){
            return redirect()->route('homepage');
        }
        else{
            $this->addError('email', 'Invalid credentials');
        }
        

    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginComponent extends Component
{
    public $email, $password, $errorMsg;

    public function submit() {
        $this->validate([
            'email'     =>  'required|email',
            'password'  =>  'required|string'
        ]);

        $user = User::where('email', $this->email)->first();

        if(!$user){
            $this->errorMsg = "Sorry your account does not exist.";
            $this->email = '';
            $this->password = '';
        } else {
            $login = auth()->attempt([
            'email'     =>  $this->email,
            'password'  =>  $this->password
        ]);

        if(!$login) {
            $this->errorMsg = 'Invalid credentials';
            $this->email    = '';
            $this->password = '';
        } else {
            return redirect('/');
        }
    }
}

        public function render()
            {
                return view('livewire.login-component')->layout('livewire.layouts.base');
            }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SignupComponent extends Component
{
    public $username, $email, $password, $password_confirmation;

    public function submit() {
        $this->validate([
            'username'  =>  'required|string',
            'email'     =>  'required|email|unique:users',
            'password'  =>  'required|confirmed|string|min:6'
        ]);

        User::create([
            'name'      =>  $this->name,
            'email'     =>  $this->email,
            'password'  =>  bcrypt($this->password)
        ]);

        return redirect('/login')->with('message', 'Your account has been successfully created.');
    }

    public function render()
    {
        return view('livewire.signup-component')->layout('livewire.layouts.base');
    }
}

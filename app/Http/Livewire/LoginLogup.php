<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginLogup extends Component
{
    public $username = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function updated($field) 
    {
        $this->validateOnly($field, [
            'username' => "string|min:3|required|max:200",
            'email' => "required|email:rfc|unique:users,email|max:200",
            'password' => "required|string|min:6|max:200|confirmed",
            'password_confirmation' => "required|string|"
        ]);
    }

    public function render()
    {
        return view('livewire.login-logup');
    }
}

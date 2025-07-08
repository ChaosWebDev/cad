<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $username, $password;
    public bool $remember_me = false;

    protected $rules = [
        'username' => ['required', 'string'],
        'password' => ['required', 'string'],
        'remember_me' => ['nullable', 'boolean']
    ];

    public function login()
    {
        $this->validate();
        $remember = $this->remember_me == true;

        if (!Auth::attempt(['username' => $this->username, 'password' => $this->password], $remember)) {
            return $this->addError('username', "Invalid credentials, please try again.");
        }

        session()->regenerate();
        return redirect()->route('desktop');
    }

    public function render()
    {
        return view('auth.login');
    }
}

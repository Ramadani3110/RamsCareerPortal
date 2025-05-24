<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;
    
    // Error message property for Livewire
    public $errorMessage = '';

    public function login()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        $this->errorMessage = 'Login gagal! Email atau password yang Anda masukkan tidak valid.';
        
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}

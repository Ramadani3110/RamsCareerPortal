<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SessionTimeout extends Component
{
    public $showModal = false;
    public $timeLeft = 60; // Countdown timer dalam detik

    protected $listeners = ['sessionTimeout' => 'showTimeoutModal'];

    public function showTimeoutModal()
    {
        $this->showModal = true;
        $this->timeLeft = 60;
    }

    public function stayLoggedIn()
    {
        $this->showModal = false;
        $this->dispatch('resetTimer');
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        
        return redirect('/a/login');
    }

    public function render()
    {
        return view('livewire.session-timeout');
    }
}

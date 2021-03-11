<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form = [
        'email'    => '',
        'password' => ''
    ];

    public function loginMethod()
    {
        $this->validate([
            'form.email'    => ['required', 'email'],
            'form.password' => ['required']
        ]);

        if (Auth::attempt(['email'  => $this->form['email'],'password' => $this->form['password']])) {
            return redirect()->route('home');
        }
        else {
            session()->flash('message', 'Username or password is invalid');
        }
    }
    
    public function render() {
        return view('livewire.login')
                ->extends('index');
    }
}

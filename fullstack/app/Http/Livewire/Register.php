<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $form = [
        'name'                  => '',
        'email'                 => '',
        'password'              => '',
        'password_confirmation' => ''
    ];

    public function register()
    {
        $this->validate([
            'form.email'    => ['required', 'email'],
            'form.name'     => ['required'],
            'form.password' => ['required', 'confirmed']
        ]);

        User::create([
            'name'     => $this->form['name'],
            'email'    => $this->form['email'],
            'password' => Hash::make($this->form['password'])
        ]);

        return redirect(route('login'));
    }
    public function render()
    {
        return view('livewire.register')
                ->extends('index');
    }
}

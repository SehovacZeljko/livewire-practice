<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class CastingBanner extends Component
{
    #[Validate('required|email')]
    public $email = '';

    public function subscribe()
    {
        $this->validate();

        // Here you would normally save to a database:
        // Lead::create(['email' => $this->email]);

        session()->flash('message', 'Thanks for signing up!');
        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.casting-banner');
    }
}
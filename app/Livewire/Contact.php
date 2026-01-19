<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class Contact extends Component
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $subject = '';

    #[Validate('required|min:10')]
    public $message = '';

    public function save()
    {
        $this->validate();

        // Logic to send email or save to DB goes here
        
        session()->flash('status', 'Message sent successfully!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact');
    }
}

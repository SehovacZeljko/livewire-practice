<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Title;

class CreateBook extends Component
{
    // #[Layout('components.layouts.another')] ::php attribute When we wont to use another layout for the livewire page 
    public function render()
    {
        return view('livewire.create-book');
    }
}

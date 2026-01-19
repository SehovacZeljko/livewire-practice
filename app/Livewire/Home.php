<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $models = [
        ['name' => 'Naomy Olsen', 'img' => 'img/team-1.jpg', 'age' => 22, 'h' => 185, 'w' => 55, 'b' => 79, 'wa' => 59, 'hi' => 89],
        ['name' => 'Pamela Torney', 'img' => 'img/team-2.jpg', 'age' => 24, 'h' => 178, 'w' => 52, 'b' => 82, 'wa' => 60, 'hi' => 88],
        ['name' => 'Naomy Olsen', 'img' => 'img/team-1.jpg', 'age' => 22, 'h' => 185, 'w' => 55, 'b' => 79, 'wa' => 59, 'hi' => 89],
        ['name' => 'Pamela Torney', 'img' => 'img/team-2.jpg', 'age' => 24, 'h' => 178, 'w' => 52, 'b' => 82, 'wa' => 60, 'hi' => 88],
        ['name' => 'Naomy Olsen', 'img' => 'img/team-1.jpg', 'age' => 22, 'h' => 185, 'w' => 55, 'b' => 79, 'wa' => 59, 'hi' => 89],
        ['name' => 'Pamela Torney', 'img' => 'img/team-2.jpg', 'age' => 24, 'h' => 178, 'w' => 52, 'b' => 82, 'wa' => 60, 'hi' => 88],
        // ... add as many as you want
    ];

    public function render()
    {
        return view('livewire.home');
    }
}

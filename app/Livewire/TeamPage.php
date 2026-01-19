<?php

namespace App\Livewire;

use Livewire\Component;

class TeamPage extends Component
{
    public $models = [
[
        'name' => 'Naomy Olsen', 
        'img' => 'img/team-1.jpg', 
        'age' => 22, 
        'height' => 185, // Changed from 'h' to 'height'
        'weight' => 55,  // Changed from 'w' to 'weight'
        'bust' => 79,    // Changed from 'b' to 'bust'
        'waist' => 59,   // Changed from 'wa' to 'waist'
        'hips' => 89     // Changed from 'hi' to 'hips'
    ],[
        'name' => 'Naomy Olsen', 
        'img' => 'img/team-1.jpg', 
        'age' => 22, 
        'height' => 185, // Changed from 'h' to 'height'
        'weight' => 55,  // Changed from 'w' to 'weight'
        'bust' => 79,    // Changed from 'b' to 'bust'
        'waist' => 59,   // Changed from 'wa' to 'waist'
        'hips' => 89     // Changed from 'hi' to 'hips'
    ],[
        'name' => 'Naomy Olsen', 
        'img' => 'img/team-1.jpg', 
        'age' => 22, 
        'height' => 185, // Changed from 'h' to 'height'
        'weight' => 55,  // Changed from 'w' to 'weight'
        'bust' => 79,    // Changed from 'b' to 'bust'
        'waist' => 59,   // Changed from 'wa' to 'waist'
        'hips' => 89     // Changed from 'hi' to 'hips'
    ],[
        'name' => 'Naomy Olsen', 
        'img' => 'img/team-1.jpg', 
        'age' => 22, 
        'height' => 185, // Changed from 'h' to 'height'
        'weight' => 55,  // Changed from 'w' to 'weight'
        'bust' => 79,    // Changed from 'b' to 'bust'
        'waist' => 59,   // Changed from 'wa' to 'waist'
        'hips' => 89     // Changed from 'hi' to 'hips'
    ],[
        'name' => 'Naomy Olsen', 
        'img' => 'img/team-1.jpg', 
        'age' => 22, 
        'height' => 185, // Changed from 'h' to 'height'
        'weight' => 55,  // Changed from 'w' to 'weight'
        'bust' => 79,    // Changed from 'b' to 'bust'
        'waist' => 59,   // Changed from 'wa' to 'waist'
        'hips' => 89     // Changed from 'hi' to 'hips'
    ],
    ];

    public function render()
    {
        return view('livewire.team-page');
    }
}

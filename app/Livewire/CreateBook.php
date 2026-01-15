<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Book;

class CreateBook extends Component
{
    public $title;
    public $author;
    public $rating;


    protected $rules = [
        'title'  => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'rating' => 'required|integer|between:1,10',
    ];


    public function save()
    {

        $validatedData = $this->validate();
        
        Book::create($validatedData);
       // return redirect()->route('/');
        $this->redirect(route('home')); 
    }

    // #[Layout('components.layouts.another')] ::php attribute When we wont to use another layout for the livewire page 
    public function render()
    {
        return view('livewire.create-book');
    }
}

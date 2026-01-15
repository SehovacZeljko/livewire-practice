<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Title;



class BookList extends Component
{
    public $name = 'Mario';

    public function delete (Book $book)
    {
        Book::findOrFail($book->id)->delete();

    }

    // public $counter = 0;

    // public function increment()
    // {
    //     $this->counter += 1;
    // }
    //     public function decrement()
    // {
    //     $this->counter -= 1;
    // }
    #[Title('Book List -Home')]
    public function render()
    {
        return view('livewire.book-list', [
            'books' => Book::all()
        ]);
    }
}

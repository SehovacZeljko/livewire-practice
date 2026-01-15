<div>
  <header class="flex justify-between">
    <div>
      <h2>Hi, {{ $name }}</h2>
      <p>Here's a list of your book reviews...</p>
    </div>
  </header>
  {{-- <div class="">
    {{$counter}}
    <button class="button" wire:click='increment'>+1</button>
    <button class="button" wire:click='decrement'>-1</button>
  </div> --}}
<form wire:submit="$refresh" action="" class="">
<span class="mr-2">Your Name:</span>
<input type="text" wire:model.live.debounce.500ms="name" class="">


</form>
 

  <ul class="list">
    @foreach($books as $book)
      <li wire:key="{{ $book->id }}">
        <h3>{{ $book->title }}</h3>
        <h4>{{ $book->author }}</h4>
        <p>Rating: {{ $book->rating }}/10</p>
        <button class="button" wire:click="delete({{$book}})">delete</button>
      </li>
    @endforeach
  </ul>
</div>

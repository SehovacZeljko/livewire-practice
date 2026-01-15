    <header class="flex justify-between">
        <div>
            <h2>Hi, {{ $name }}</h2>
            <p>Here's a list of your book reviews...</p>
        </div>
        {{-- <div class="">
          {{$counter}}
          <button class="button" wire:click='increment'>+1</button>
          <button class="button" wire:click='decrement'>-1</button>
        </div> --}}
        <form wire:submit="$refresh" action="" class="">
            <span class="mr-2">Your Name:</span>
            <input type="text" wire:model.live.debounce.500ms="name" class="">
        </form>
    </header>
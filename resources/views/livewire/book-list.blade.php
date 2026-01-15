<div>
  <livewire:page-header />
    </form>
    <ul class="list">
        @foreach ($books as $book)
            <li wire:key="{{ $book->id }}">
                <h3>{{ $book->title }}</h3>
                <h4>{{ $book->author }}</h4>
                <p>Rating: {{ $book->rating }}/10</p>
                <button class="button" wire:click="delete({{ $book }})">delete</button>
            </li>
        @endforeach
    </ul>
</div>

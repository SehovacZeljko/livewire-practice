<div>
    <h1>Create Book Page</h1>

    <form wire:submit.prevent="save">
        <div class="my-3">
            <label>Book Name:</label>
            <input type="text" wire:model="title">
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="my-3">
            <label>Book Author:</label>
            <input type="text" wire:model="author">
            @error('author') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="my-3">
            <label>Book Rating:</label>
            <input type="number" wire:model="rating" min="1" max="10" step="1">
            @error('rating') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="button">Create Book</button>
    </form>
</div>
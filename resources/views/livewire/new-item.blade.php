<div>
    <form wire:submit.prevent="submit">
        <input class="form-control  border-transparent bg-gray-200 pr-10 placeholder-theme-8 mt-3 w-1/2" type="text" value="" placeholder="Maak nieuw item" wire:model.debounce.500ms="item_name">
        @error('category_name') <span class="error">{{ $message }}</span> @enderror
        <button class="btn btn-success w-24 mr-1 mb-2 mt-2" type="submit">Maak!</button>

    </form>
</div>

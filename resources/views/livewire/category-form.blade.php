<div>
    
    <form wire:submit.prevent="submit">
        <label class="form-label">Maak een nieuwe categorie</label>
        <input class="form-control py-3 px-4 border-transparent bg-gray-200 pr-10 placeholder-theme-8" type="text" value="" placeholder="category naam" wire:model.debounce.500ms="category_name">
 
        @error('category_name') <span class="error">{{ $message }}</span> @enderror
        <button class="btn btn-success w-24 mr-1 mb-2 mt-2" type="submit">Maak!</button>

    </form>
</div>

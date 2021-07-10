
    {{-- @dd($category) --}}
        
            {{-- @dump($trip->categories->pluck('id')->contains($category->id)) --}}
            <input 
                id = "{{$category->id}}" 
                class = "form-check-input" 
                type = "checkbox" 
                name = "cats" 
                value = "{{$category->id}}" 
                wire:model = "isActive"

                {{-- @if($trip_categories->contains($category->id))
                checked="checked"
                @endif --}}
            >
            
    
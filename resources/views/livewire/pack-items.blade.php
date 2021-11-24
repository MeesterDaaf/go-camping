<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
    <input 
        id = "item_{{$item->id}}" 
        class = "focus:outline-none toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursur-pointer" 
        type = "checkbox" 
        name = "items" 
        value = "{{$item->id}}" 
        wire:model = "isItemActive"
    >
    <label 
        class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"
        for="item_{{$item->id}}">
    </label>    

    {{-- <input type="checkbox" name="items" id="" >    
    <label class="form-check-label" for="item_{{$item->id}}">{{$item->title}}</label> --}}
</div>
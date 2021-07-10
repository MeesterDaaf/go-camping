
<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
    <input 
        id = "category_{{$category->id}}" 
        class = "focus:outline-none toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursur-pointer" 
        type = "checkbox" 
        name = "cats" 
        value = "{{$category->id}}" 
        wire:model = "isActive"
    >
    <label 
    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"

    for="category_{{$category->id}}"></label>            
</div>   

<style>
    .toggle-checkbox:checked{
        @apply: right-0 border-green-400;
        right: 0;
        border-color: #68D391;
    }

    .toggle-checkbox:checked + .toggle-label{
        @apply: bg-green-400;
    }
</style>
    
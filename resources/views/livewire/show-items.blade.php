<div>
    {{-- @dd($items) --}}
    @forelse ($categories as $category)
        <div class="form-check mr-2">
            <div class="flex flex-col">
                {{-- <h4 class="font-medium text-base mr-auto">{{$category->title}}</h4> --}}
                @forelse ($category->items->sortDesc() as $item)
                    
                    <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                        <input 
                            id = "item_{{$item->id}}" 
                            class = "focus:outline-none toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursur-pointer" 
                            type = "checkbox" 
                            name = "items" 
                            value = "{{$item->id}}" 
                            {{-- wire:model = "isActive" --}}
                        >
                        <label 
                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"
                            for="item_{{$item->id}}">
                            
                        </label>    
                        {{$item->title}}   

                        {{-- <input type="checkbox" name="items" id="" >    
                        <label class="form-check-label" for="item_{{$item->id}}">{{$item->title}}</label> --}}
                    </div>
                @empty
            
                @endforelse
            </div>
        </div>
    @empty
                
    @endforelse
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
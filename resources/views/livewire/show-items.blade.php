<div>
    {{-- @dd($items) --}}
    @forelse ($categories as $category)
        <div class="form-check mr-2">
            <div class="flex flex-col">
                {{-- <h4 class="font-medium text-base mr-auto">{{$category->title}}</h4> --}}
                @forelse ($category->items->sortDesc() as $item)
                    <div class="form-check mr-2">
                        <input type="checkbox" name="items" id="item_{{$item->id}}" >    
                        <label class="form-check-label" for="item_{{$item->id}}">{{$item->title}}</label>
                    </div>
                @empty
            
                @endforelse
            </div>
        </div>
    @empty
                
    @endforelse
</div>

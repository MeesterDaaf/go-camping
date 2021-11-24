<div>
    <div class="flex flex-wrap overflow-hidden">

        @forelse ($categories as $category)
            <div class="w-1/3 overflow-hidden">

                <h5 class="font-medium text-base mr-auto mb-6">{{$category->title}}</h5>
                <div class="form-check mr-2">
                    <div class="flex flex-col">
                        @livewire('new-item', [ 'category' => $category], key('new-category-item-'. $category->id))
                        {{-- <h4 class="font-medium text-base mr-auto">{{$category->title}}</h4> --}}
                        @forelse ($category->items->sortDesc() as $item)
                            <div class="item mt-4">
                                @livewire('pack-items', [
                                    'item' => $item,
                                    'trip' => $trip
                                ], key('item_'.$item->id))
                                <label class="form-check-label" for="item_{{$item->id}}">{{$item->title}}</label>
                            </div>
                        @empty
                                
                        @endforelse
                            {{-- @livewire('new-item', ['user' => $user], key($user->id)) --}}
                        
                    </div>
                </div>
            </div>
        @empty
    </div>
                
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
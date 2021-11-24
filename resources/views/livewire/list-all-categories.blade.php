<div>
    @foreach ($categories as $category)
        <div class="category-item mt-4">
            @livewire('toggle-category', [
                'category'=> $category,
                'trip'=> $trip
                ],  key($category->id))
            <label class="form-check-label" for="category_{{$category->id}}">{{$category->title}}</label>
        </div> 
    @endforeach
</div>

<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;

class NewItem extends Component
{
    public $item_name;
    public $category;

    protected $rules = [
        'item_name' => 'required',
    ];


    public function submit()
    {
        $this->validate();

        $item = new Item();

        $item->title = $this->item_name;
        $item->category_id = $this->category->id;
        $item->save();

        $this->emit('updateItems');
    }


    public function render()
    {
        return view('livewire.new-item');
    }
}

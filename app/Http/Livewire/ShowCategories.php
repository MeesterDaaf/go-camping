<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class ShowCategories extends Component
{
    public $category;

    public $trip = null;

    public bool $isActive;

    public function mount(Request $request)
    {
        $this->trip = $request->trip;
        $this->isActive = false;
        if ($this->trip->categories->where('id', $this->category->id)->isNotEmpty()) {
            $this->isActive = true;
        }
    }

    public function render()
    {
        return view('livewire.show-categories', [
            'category'  => $this->category
        ]);
    }

    public function updating($field, $value)
    {
        if (is_numeric($value)) {
            $this->trip->categories()->attach($value);
        } else {
            $this->trip->categories()->detach($this->category->id);
        }
    }


    public function updated($name, $value)
    {
        $this->emit('updateItems');
    }
}

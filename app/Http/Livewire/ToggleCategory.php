<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;

class ToggleCategory extends Component
{
    public $category;

    public $trip;

    public bool $isActive;

    public function mount()
    {
        $this->isActive = false;
    }

    public function render(Request $request)
    {
        if ($request->trip != NULL) {

            $this->trip = $request->trip;
            $this->isActive = false;

            if ($this->trip->categories->where('id', $this->category->id)->isNotEmpty()) {
                $this->isActive = true;
            }
        }

        return view('livewire.toggle-category', [
            'category'  => $this->category,
        ]);
    }

    public function updating($field, $value)
    {
        if (is_numeric($value)) {
            $this->trip->categories()->attach($value);
        } else {
            $this->trip->categories()->detach($this->category->id);
            $this->trip->items()->detach();
        }
    }

    public function updated($name, $value)
    {
        $this->emit('updateItems');
    }
}

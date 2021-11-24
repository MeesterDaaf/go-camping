<?php

namespace App\Http\Livewire;

use App\Models\Trip;
use Illuminate\Http\Request;
use Livewire\Component;

class PackItems extends Component
{
    public $isItemActive;
    public $item;
    public $trip;


    protected $listeners = ['runPack'];

    public function mount(Request $request)
    {


        $this->isItemActive = false;
        if ($this->trip->items->where('id', $this->item->id)->isNotEmpty()) {
            $this->isItemActive = true;
        }
    }


    public function render()
    {

        return view('livewire.pack-items', [
            'trip' => $this->trip
        ]);
    }

    public function updating($field, $value)
    {
        if (is_numeric($value)) {
            $this->trip->items()->attach($value);
        } else {
            $this->trip->items()->detach($this->item->id);
        }
    }
}

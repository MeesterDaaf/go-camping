<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class ShowItems extends Component
{

    public $trip;

    protected $listeners = ['updateItems' => 'render'];

    public function mount(Request $request)
    {
        $this->trip = $request->trip;
    }

    public function render()
    {
        return view(
            'livewire.show-items',

            [
                'categories' => $this->trip->categories,
                'trip'       => $this->trip

            ]
        );
    }

    public function updated($name, $value)
    {
    }
}

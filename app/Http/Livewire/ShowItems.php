<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class ShowItems extends Component
{
    protected $listeners = ['updateItems' => 'render'];

    public $trip;

    public function mount(Request $request)
    {
        $this->trip = $request->trip;
    }

    public function render()
    {
        return view(
            'livewire.show-items',

            [
                'categories' => $this->trip->categories
            ]
        );
    }
}

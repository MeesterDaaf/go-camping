<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;

class ListAllCategories extends Component
{
    protected $listeners = ['updateCategories' => 'render'];

    public $trip;

    public function render()
    {
        // dump($this->trip);
        return view(
            'livewire.list-all-categories',
            [
                'categories' => Category::all(),
                'trip' => $this->trip
            ]
        );
    }

    public function updated()
    {
        $this->emit('activateToggles');
    }
}

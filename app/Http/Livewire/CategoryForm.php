<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;

class CategoryForm extends Component
{
    public $category_name;

    protected $rules = [
        'category_name' => 'required|min:6',
    ];

    public function submit()
    {

        $this->validate();

        // Execution doesn't reach here if validation fails.
        Category::create([
            'title' => $this->category_name,
        ]);

        $this->category_name = "";

        $this->emit('updateCategories');
    }

    public function render(Request $request)
    {
        return view('livewire.category-form');
    }
}

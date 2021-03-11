<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
    public $categories;

    public function mount() {
        $this->categories = ModelsCategory::all();
    }

    public function render() {
        return view('livewire.category');
    }
}

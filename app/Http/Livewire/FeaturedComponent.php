<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FeaturedComponent extends Component
{
    public function render()
    {
        return view('livewire.featured-component')->layout('livewire.layouts.base');
    }
}

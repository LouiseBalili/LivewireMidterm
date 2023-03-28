<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;

class BandComponent extends Component
{
    public function render()
    {
        return view('livewire.crud.band-component')->layout('livewire.layouts.base');
    }
}

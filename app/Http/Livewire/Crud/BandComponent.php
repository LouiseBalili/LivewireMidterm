<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Band;

class BandComponent extends Component
{
    public function render()
    {

        $bands = Band::orderBy('id')->get();

        return view('livewire.crud.band-component', ['bands' => $bands])->layout('livewire.layouts.base');
    }
}

<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Band;
use Faker\Provider\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class CreateComponent extends Component
{
    use WithFileUploads;
    public $bandname, $location, $rate, $total_transactions, $description, $image, $genre;

    public function render()
    {
        return view('livewire.crud.create-component')->layout('livewire.layouts.base');
    }

    public function save() {
        $this->image->store('photos');

        return $image;
    }

    public function addBand() {
        $this->validate([
            'bandname' => 'string|required',
            'description' => 'string|required',
            'location' => 'string|required',
            'genre' => 'required|string',
            'rate' => 'string|required',
            'image' => 'image|required',
            'total_transactions' => 'numeric|required',
        ]);

        $path = $this->image->store('public/images');

        Band::create([
            'bandname' => $this->bandname,
            'description' => $this->description,
            'location' => $this->location,
            'genre' => $this->genre,
            'rate' => $this->rate,
            'image' => $path,
            'total_transactions' => $this->total_transactions
        ]);

        return redirect('/')->with('message', 'Band created successfully');
    }
}

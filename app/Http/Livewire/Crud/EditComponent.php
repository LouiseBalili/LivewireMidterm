<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Band;
use Faker\Provider\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditComponent extends Component
{

    use WithFileUploads;
    public $bandname, $location, $rate, $total_transactions, $description, $image, $newImage, $genre, $band_id;
    
    public function mount($id) {
        $band = Band::find($id);

        $this->bandname = $band->bandname;
        $this->location = $band->location;
        $this->rate = $band->rate;
        $this->total_transactions = $band->total_transactions;
        $this->description = $band->description;
        $this->image = $band->image;
        $this->genre = $band->genre;

        $this->band_id = $id;
    }

    public function update() {
        $this->validate([
            'bandname' => 'string|required',
            'description' => 'string|required',
            'location' => 'string|required',
            'genre' => 'required|string',
            'rate' => 'string|required',
            'image' => 'required',
            'total_transactions' => 'numeric|required',
        ]);

        if($this->newImage){
            $path = $this->newImage->store('public/images');
        } else {
            $path = $this->image;
        }

        Band::findOrFail($this->band_id)->update([
            'bandname' => $this->bandname,
            'description' => $this->description,
            'location' => $this->location,
            'genre' => $this->genre,
            'rate' => $this->rate,
            'image' => $path,
            'total_transactions' => $this->total_transactions,
        ]);

        return redirect('/')->with('message', 'Band updated successfully!');
       
    }

    public function render()
    {
        return view('livewire.crud.edit-component')->layout('livewire.layouts.base');
    }
}

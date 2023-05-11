<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Artist;
use Faker\Provider\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditComponent extends Component
{

    use WithFileUploads;
    public $name, $location, $rate, $total_transactions, $description, $image, $newImage, $genre, $artist_id;
    public $rock, $pop, $rap, $rnb, $jazz, $latin, $soul;
    public $locations = [ 'Bohol', 'Dumaguete', 'Palawan', 'Cebu', 'Manila', 'Iloilo', 'Pampanga'];

    public function mount($id) {
        $artist = Artist::find($id);

        $this->name = $artist->name;
        $this->location = $artist->location;
        $this->rate = $artist->rate;
        $this->total_transactions = $artist->total_transactions;
        $this->description = $artist->description;
        $this->image = $artist->image;
        $this->genre = $artist->genre;

        $selectedGenres = explode(',', $artist->genre);

        if(in_array('Rock', $selectedGenres)) {
            $this->rock = true;
        }
        if(in_array('Pop', $selectedGenres)) {
            $this->pop = true;
        }
        if(in_array('Rap', $selectedGenres)) {
            $this->rap = true;
        }
        if(in_array('R&B', $selectedGenres)) {
            $this->rnb = true;
        }
        if(in_array('Jazz', $selectedGenres)) {
            $this->jazz = true;
        }
        if(in_array('Latin', $selectedGenres)) {
            $this->latin = true;
        }
        if(in_array('Soul', $selectedGenres)) {
            $this->soul = true;
        }

        $this->artist_id = $id;
    }

    public function update() {
        $this->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'location' => 'string|required',
            'rate' => 'string|required',
            'total_transactions' => 'numeric|required',
        ]);

        if($this->newImage){
            $this->validate(['newImage' => 'required|image|max:2048']);
            $path = $this->newImage->store('public');
        } else {
            $path = $this->image;
        }

        $selectedGenres = [];

        if($this->rock) {
            array_push($selectedGenres, 'Rock');
        }
        if($this->pop) {
            array_push($selectedGenres, 'Pop');
        }
        if($this->rap) {
            array_push($selectedGenres, 'Rap');
        }
        if($this->rnb) {
            array_push($selectedGenres, 'R&B');
        }
        if($this->jazz) {
            array_push($selectedGenres, 'Jazz');
        }
        if($this->latin) {
            array_push($selectedGenres, 'Latin');
        }
        if($this->soul) {
            array_push($selectedGenres, 'Soul');
        }

        $genre = implode(',', $selectedGenres);

        Artist::findOrFail($this->artist_id)->update([
            'name' => $this->name,
            'description' => $this->description,
            'location' => $this->location,
            'genre' => $genre,
            'rate' => $this->rate,
            'image' => $path,
            'total_transactions' => $this->total_transactions,
        ]);

        return redirect('/dashboard')->with('message', 'Artist updated successfully!');

    }

    public function cancelUpdate() {
        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.crud.edit-component')->layout('livewire.layouts.base');
    }
}

<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Artist;
use Faker\Provider\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class CreateComponent extends Component
{
    use WithFileUploads;
    public $name, $location, $rate, $total_transactions, $description, $image, $genre;
    public $rock, $pop, $rap, $rnb, $jazz, $latin, $soul;
    public $locations = [ 'Bohol', 'Dumaguete', 'Palawan', 'Cebu', 'Manila', 'Iloilo', 'Pampanga'];

    public function render()
    {
        return view('livewire.crud.create-component')->layout('livewire.layouts.base');
    }

    public function save() {
       $path=$this->image->store('public/images');

        return $path;
    }

    public function addArtist() {
        $this->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'location' => 'string|required',
            'rate' => 'string|required',
            'image' => 'image',
            'total_transactions' => 'numeric|required',
        ]);

        $path = $this->image->store('public');

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

        Artist::create([
            'name' => $this->name,
            'description' => $this->description,
            'location' => $this->location,
            'genre' => $genre,
            'rate' => $this->rate,
            'image' => $path,
            'total_transactions' => $this->total_transactions
        ]);

        return redirect('/dashboard')->with('message', 'Artist created successfully');
    }


    public function cancelRegistration() {
        return redirect('/dashboard');
    }
}

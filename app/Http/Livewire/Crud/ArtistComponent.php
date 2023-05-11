<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Artist;
use Livewire\WithPagination;
use Faker\Provider\Image;


class ArtistComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $sortDirection;
    public $sortByLocation;
    public $rateSlider = 0;
    public $selectedGenres = [];

    public function render()
    {
        $query = Artist::search($this->search);

        if (!empty($this->selectedGenres)) {
            $query->where(function($query) {
                foreach ($this->selectedGenres as $genre) {
                    $query->orWhere('genre', 'LIKE', '%'.$genre.'%');
                }
            });
        }

        if(!empty($this->sortByLocation)){
           $query->where('location', $this->sortByLocation);
        }

        if(!empty($this->rateSlider)){
            $query->where('rate', '>=', $this->rateSlider);
        }
        if(!empty($this->sortDirection)){
            $query->orderBy('rate', $this->sortDirection);
        }

        $artists = $query->paginate(6);

        $result = Artist::orderBy('id')->get();
        $data = $result->toArray();
        $locations = array_unique(array_column($data, 'location'));

        return view('livewire.crud.artist-component', [
            'artists' => $artists,
            'locations' => $locations,

            ])->layout('livewire.layouts.base');
    }

    public function deleteArtist($id) {
        Artist::find($id)->delete();

        return redirect('/dashboard')->with('message', 'Artist deleted successfully!');
    }

    public function resetFilter(){
        $this->reset('search', 'rateSlider', 'sortDirection', 'sortByLocation');
    }
}

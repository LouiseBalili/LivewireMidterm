<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Band;
use Livewire\WithPagination;
use Faker\Provider\Image;


class BandComponent extends Component
{
    // use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    // public $bandname, $location, $rate, $total_transactions, $description, $image, $genre;

    public $search;
    public $sortDirection;
    public $sortByLocation;
    public $rateSlider = 0;
    public $selectedGenres = [];

    public function render()
    {
        $query = Band::search($this->search);

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

        $bands = $query->paginate(8);

        // fetch existing locations from the band table
        // and removes duplicate.
        $result = Band::orderBy('id')->get();
        $data = $result->toArray();
        $locations = array_unique(array_column($data, 'location'));

        return view('livewire.crud.band-component', [
            'bands' => $bands,
            'locations' => $locations,

            ])->layout('livewire.layouts.base');
    }

    public function deleteBand($id) {
        Band::find($id)->delete();

        return redirect('/')->with('message', 'Band deleted successfully!');
    }

    public function resetFilter(){
        $this->reset('search', 'rateSlider', 'sortDirection', 'sortByLocation');
    }
}

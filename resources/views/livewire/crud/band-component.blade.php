<div>
    <div class="mx-auto mt-5" style="width: 80%;">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="card p-4">
                    <input wire:model="search" class="form-control" placeholder="Search">

                    <p class="mt-3 mb-0">Genre</p>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Rock" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Rock
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Pop" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Pop
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Reggae" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Reggae
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Acoustic" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Acoustic
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Classical" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Classical
                        </label>
                    </div>

                    <select wire:model="sortByLocation" class="form-select mt-3" aria-label="Default select example">
                        <option value="">All</option>
                        @foreach($locations as $loc)
                        <option value="{{ $loc }}">{{ $loc }}</option>
                        @endforeach
                    </select>

                    <div class="mt-3">
                        <label for="customRange1" class="form-label">Rate</label>
                        <input wire:model="rateSlider" type="range" min="1000" max="10000" step="500" class="form-range" id="customRange1">
                    </div>

                    <p>P {{ $rateSlider }}</p>

                    <select wire:model="sortDirection" class="form-select mt-3" aria-label="Default select example">
                        <option value="">Select sort direction</option>
                        <option value="asc">Lowest to Highest</option>
                        <option value="desc">Highest to Lowest</option>
                    </select>

                    <button wire:click="resetFilter" class="btn btn-primary float-end mt-3">Reset Filter</button>
                </div>
            </div>
            <div class="col-12 col-lg-9">
            @if ($message = Session::get('message'))
                <div class="alert alert-success alert-block">
                    <p class="fw-semibold">{{ $message }}</p>
                </div>
            @endif
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Take your music everywhere with us.</h1>

                    <a href="{{ url('/create-band') }}" class="btn btn-primary">Add Band</a>
                    
                </div>

                <hr>
                <div class="row g-3 mb-3">
                    @foreach($bands as $band)
                    <div class="col-12 col-md-6 col-lg-3">


                        <div id="band-card" class="card" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $band->id }}">
                            <img src="{{asset(str_replace('public', 'storage', $band->image))}}" class="card-img" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $band->bandname }}</h5>
                                <p class="card-text mb-0">Location: {{ $band->location }}</p>
                                <p class="card-text mb-0">Rate: {{ $band->rate }}</p>
                                <p class="card-text mb-0">Genre: {{ $band->genre }}</p>
                            </div>
                        </div>

                         <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $band->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="d-flex flex-column">

                                    <img src="{{asset(str_replace('public', 'storage', $band->image))}}" height="120" width="120" class="mx-auto rounded-circle border border-dark border-4 shadow-sm mt-10" alt="">

                                    <div class="w-25 d-flex justify-content-between align-items-center mx-auto">
                                    <a href="{{ url('/edit-profile/' . $band->id) }}" class="text-center mt-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    <a wire:click="deleteBand({{ $band->id }})" class="text-center mt-2"><i class="fa-solid fa-trash"></i> Delete</a>
                                    </div>
                                    <div class="text-center p-1">
                                    © Founder | <a href="">websitename.com</a>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center mt-3">
                                        <a href="#" class="button mx-2"><i class="fa-brands fa-facebook"></i></a>
                                        <a href="#" class="button mx-2"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#" class="button mx-2"><i class="fa-brands fa-twitter"></i></a>
                                    </div>
                                    <div class="p-3 text-center mt-2">
                                        {{ $band->description }}
                                    </div>
                                    <button id="bookNow" class="btn text-white mx-auto mt-3 rounded-pill" style="background-color: #0039a6;">Book Now</button>
                                    <div class="row mt-5 mb-5">
                                        <div class="col text-center">
                                            <strong>{{ $band->rate }}</strong>
                                            <p>Talent Fee</p>
                                        </div>
                                        <div class="col text-center">
                                            <strong>{{ $band->total_transactions}}</strong>
                                            <p>Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        </div>

                        
                    </div>

                    @endforeach
                    
                </div>

                {{ $bands->links() }}
            </div>
        </div>
    </div>

    <style>
    #band-card:hover {
        outline-style: solid;
        border-style: solid;
        outline-width: 3px;
        border-radius: 5px;
        outline-color: #3b82f6;
        border-color: #3b82f6;
        transition: ease-in .1s;
    }

    #bookNow:hover {
        background-color: #0047AB !important;
    }

    .-mt-10 {
        margin-top: -100px !important;
    }

    .mt-10 {
        margin-top: 50px !important;
    }
    
    .button {
        display: inline-block;
        padding: 5px 10px;
        border: 2px solid black;
        border-radius: 50%;
        text-decoration: none;
        text-align: center;
        color: black;
    }
    .button:hover {
        border: 2px solid #2563eb;
        color: #2563eb;
    }
    </style>
</div>



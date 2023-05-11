<div>
    <div class="mx-auto mt-5" style="width: 92%;">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="card p-4" style="background-color:#37383b;">
                    <input wire:model="search" class="form-control" placeholder="Search">

                    <p class="mt-3 mb-0 text-light">Genre</p>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Rock" id="flexCheckDefault">
                        <label class="form-check-label text-light" for="flexCheckDefault">
                            Rock
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Pop" id="flexCheckDefault">
                        <label class="form-check-label text-light" for="flexCheckDefault">
                            Pop
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Rap" id="flexCheckDefault">
                        <label class="form-check-label text-light" for="flexCheckDefault">
                            Rap
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="R&B" id="flexCheckDefault">
                        <label class="form-check-label text-light" for="flexCheckDefault">
                            R&B
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Jazz" id="flexCheckDefault">
                        <label class="form-check-label text-light" for="flexCheckDefault">
                            Jazz
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Latin" id="flexCheckDefault">
                        <label class="form-check-label text-light" for="flexCheckDefault">
                            Latin
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="selectedGenres" class="form-check-input" type="checkbox" value="Soul" id="flexCheckDefault">
                        <label class="form-check-label text-light" for="flexCheckDefault">
                            Soul
                        </label>
                    </div>

                    <select wire:model="sortByLocation" class="form-select mt-3" aria-label="Default select example">
                        <option value="">Select Location</option>
                        @foreach($locations as $loc)
                        <option value="{{ $loc }}">{{ $loc }}</option>
                        @endforeach
                    </select>

                    <div class="mt-3">
                        <label for="customRange1" class="form-label text-light">Rate</label>
                        <input wire:model="rateSlider" type="range" min="1000" max="10000" step="500" class="form-range" id="customRange1">
                    </div>

                    <p class="text-light">P {{ $rateSlider }}</p>

                    <select wire:model="sortDirection" class="form-select mt-3" aria-label="Default select example">
                        <option value="">Sort by:</option>
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
                    <h1 class="text-light">Book With Your Favorite Artist Now.</h1>

                    <a href="{{ url('/create-artist') }}" class="btn btn-primary">Add Artist</a>
                </div>

                <hr class="dotted" style="border-top: 6px dotted #ffffff;">
                <div class="row g-3 mb-3">
                    @foreach($artists as $artist)
                    <div class="col-12 col-md-6 col-lg-4">


                        <div id="artist-card" class="card" style="background-color:#37383b;" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $artist->id }}">
                            <div class="container mt-3" style="height:420px;">
                                <img src="{{asset(str_replace('public', 'storage', $artist->image))}}" class="card-img" alt="artistimg">
                            </div>
                            <div class="card-body" style="margin-top:-120px;">
                                <h4 class="card-title text-light">{{ $artist->name }}</h4>
                                <p class="card-text mb-0 text-light">Genre: {{ $artist->genre }}</p>
                                <p class="card-text mb-0 text-light">Location: {{ $artist->location }}</p>
                                <p class="card-text mb-0 text-light">Rate: ₱{{ $artist->rate }}</p>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal{{ $artist->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background-color:#37383b;">
                                <div class="d-flex flex-column">

                                    <img src="{{asset(str_replace('public', 'storage', $artist->image))}}" height="120" width="120" class="mx-auto rounded-circle border border-secondary border-4 shadow-sm mt-10" alt="artistimg">

                                    <h3 class="text-center mt-2 text-light">{{ $artist->name }}</h5>

                                    <div class="d-flex justify-content-center align-items-center mt-3">
                                        <a href="#" class="button mx-2 border-secondary"><i class="fa-brands fa-facebook text-light"></i></a>
                                        <a href="#" class="button mx-2 border-secondary"><i class="fa-brands fa-instagram text-light"></i></a>
                                        <a href="#" class="button mx-2 border-secondary"><i class="fa-brands fa-twitter text-light"></i></a>
                                    </div>
                                    <div class="p-3 text-center mt-2 text-light">
                                        {{ $artist->description }}
                                    </div>
                                    <div class="col text-center text-light">
                                        <strong>₱{{ $artist->rate }}</strong>
                                    </div>
                                    <button id="bookNow" class="btn btn-primary text-white mx-auto mt-3 w-50">Book Now</button>
                                    <div class="row mt-5 mb-5">
                                        <div class="col text-center text-light">
                                            <p class="-mt-5">Total Transactions:</p>
                                            {{ $artist->total_transactions}}
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-warning">
                                            <a href="{{ url('/edit-artist/' . $artist->id) }}" class="text-decoration-none text-white"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                        </button>
                                        <button class="btn btn-danger">
                                            <a wire:click="deleteArtist({{ $artist->id }})" class="text-decoration-none text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                                        </button>

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        </div>


                    </div>

                    @endforeach

                </div>
                <div class="d-flex justify-content-center">
                {{ $artists->links() }}
                </div>
            </div>
        </div>
    </div>

    <style>
    #artist-card:hover {
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



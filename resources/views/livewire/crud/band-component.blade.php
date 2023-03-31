<div>
    <div class="mx-auto mt-5" style="width: 90%;">
        <div class="row">
            <div class="col-6 col-md-4">
                <div class="card bg-primary">
                    <h1>slfsjlfj</h1>
                </div>
            </div>
            <div class="col-md-8">
                <h1>Find the gig you love!</h1>
                <hr>
                <div class="row g-2">
                    @foreach($bands as $band)
                    <div class="col-6">
                        <div id="band-card" class="d-flex border bg-white rounded shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $band->id }}">
                            <img src="{{ $band->image }}" height="200" width="160" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $band->id }}">
                            <div class="d-block p-3">
                                <!-- <p class="fs-6 fw-semibold">{{ $band->bandname }}</p> -->
                                <h6>{{ $band->bandname }}</h6>
                                <p class="mb-0">Location: <strong>{{ $band->location }}</strong></p>
                                <p class="mb-0">Rate: <strong>{{ $band->rate }}</strong></p>
                                <p class="mb-0">Genre: <strong>{{ $band->genre }}</strong></p>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $band->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="d-flex flex-column">

                                <img src="{{ $band->image }}" height="120" width="120" class="mx-auto rounded-circle border border-white border-4 shadow-sm mt-10" alt="">

                                <div class="text-center p-1">
                                ©{{ $band->founder }} | <a href="">websitename.com</a>
                                </div>
                                <!-- <hr class="-mt-10"> -->

                                <div class="d-flex justify-content-center align-items-center mt-3">
                                    <a href="#" class="button mx-2"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#" class="button mx-2"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#" class="button mx-2"><i class="fa-brands fa-twitter"></i></a>
                                </div>
                                <div class="p-3 text-center mt-2">
                                    {{ $band->description }}
                                </div>
                                <button id="bookNow" class="btn text-white mx-auto mt-3 rounded-pill" style="background-color: #0039a6;">Book Now</button>
                                <div class="row mt-5">
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #band-card:hover {
        background-color: #e6e6e6 !important;
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

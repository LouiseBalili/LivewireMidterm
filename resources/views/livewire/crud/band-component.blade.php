<div>
    <div class="w-75 mx-auto mt-5">
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
                        <div class="d-flex border bg-white rounded shadow-md">
                            <img src="{{ $band->image }}" height="200" width="160" alt="">
                            <div class="d-block p-3">
                                <!-- <p class="fs-6 fw-semibold">{{ $band->bandname }}</p> -->
                                <h6>{{ $band->bandname }}</h6>
                                <p class="mb-0">Location: <strong>{{ $band->location }}</strong></p>
                                <p class="mb-0">Rate: <strong>{{ $band->rate }}</strong></p>
                                <p class="mb-0">Genre: <strong>{{ $band->genre }}</strong></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

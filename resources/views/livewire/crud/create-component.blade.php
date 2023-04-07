<div>
    <!-- <div class="mt-5">
        <div class="container col-6 col md-4">
            <form wire:submit.prevent="addBand()">
            <div class="d-flex align-items-center">
                <div class="form-group w-50">
                <label for="" style="color:dimgray">Add Band Photo:</label>
                <input type="file" wire:model="image"
                    class="form-control">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>

                <div class="d-block p-3">
                    @if ($image)
                    <p class="fs-6 mb-0">Photo Preview:</p>
                        <img src="{{ $image->temporaryUrl() }}" style="width:100px; height:100px">
                    @else
                    <p></p>
                    <div class="container" style="width:100px; height:100px"></div>
                    @endif
                </div>
            </div>
            <div class="form-group w-50 mb-3">
                <label for="" style="color:dimgray">Band Name:</label>
                <input type="text" class="form-control"
                    wire:model="bandname">
                @error('bandname')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group w-50 mb-3">
                <label for="" style="color:dimgray">Description:</label>
                <textarea type="text" class="form-control"
                    wire:model="description"></textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group w-50 mb-3">
                <label for="" style="color:dimgray">Genre:</label>
                <input type="text" class="form-control"
                    wire:model="genre">
                @error('genre')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group w-50 mb-3">
                <label for="" style="color:dimgray">Rate:</label>
                <input type="text" class="form-control"
                    wire:model="rate">
                @error('rate')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group w-50 mb-3">
                <label for="" style="color:dimgray">Location:</label>
                <input type="text" class="form-control"
                    wire:model="location">
                @error('location')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group w-50 mb-3">
                <label for="" style="color:dimgray">Founder:</label>
                <input type="text" class="form-control"
                    wire:model="founder">
                @error('founder')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group w-50 mb-3">
                <label for="" style="color:dimgray">Total Transactions:</label>
                <input type="text" class="form-control"
                    wire:model="total_transactions">
                @error('total_transactions')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add Band</button>
        </div>
        </form>
    </div> -->

    <div class="container col-6 col-md-4 mt-5">
        <div class="card mb-5 p-4 shadow-sm">
        <!-- <div class="p-4"> -->
        <form wire:submit.prevent="addBand()">
            <h4 class="text-center mb-3">Add new band</h4>
            <div class="text-center">
            @if ($image)
                <p class="fs-6 mb-0">Photo Preview:</p>
                <img src="{{ $image->temporaryUrl() }}" class="rounded-circle text-center mt-2" style="width:150px; height:150px">
            @else
            @endif
            </div>
            <div class="mb-3">      
                <label for="formFile" class="form-label">Add band photo</label>
                <input wire:model="image" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Band Name:</label>
                <input wire:model="bandname" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
            <textarea wire:model="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Genre:</label>
                <input wire:model="genre" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Location:</label>
                <input wire:model="location" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Rate:</label>
                <input wire:model="rate" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Total Transactions:</label>
                <input wire:model="total_transactions" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <button class="btn btn-primary mb-3" type="submit">Register Band</button>
        </form>
                                <!-- </div> -->
        </div>
    </div>
</div>

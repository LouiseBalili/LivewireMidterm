<div>
<div class="container col-6 col-md-4 mt-5">
        <div class="card mb-5 p-4 shadow-sm">
        <!-- <div class="p-4"> -->
        <!-- <form wire:submit.prevent="update()"> -->
            <h4 class="text-center mb-3">Edit Band</h4>
            <div class="text-center">
            @if (!$newImage)
                <p class="fs-6 mb-0">Photo Preview:</p>
                <img src="{{ asset(str_replace('public', 'storage', $image)) }}" class="rounded-circle text-center mt-2" style="width:150px; height:150px">
            @else
                <img src="{{ $newImage->temporaryUrl() }}" class="rounded-circle text-center mt-2" style="width:150px; height:150px">
            @endif
            </div>

            <div class="mb-3">      
                <label for="formFile" class="form-label">Add band photo</label>
                <input wire:model="newImage" class="form-control" type="file" id="formFile">
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
            <button wire:click="update()" class="btn btn-primary mb-3" type="submit">Update</button>
        <!-- </form> -->
                                <!-- </div> -->
        </div>
    </div>
</div>

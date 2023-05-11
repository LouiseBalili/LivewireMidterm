<div>
<div class="container col-6 col-md-4 mt-5">
        <div class="card mb-5 p-4 shadow-sm" style="background-color:#37383b;">
        <!-- <div class="p-4"> -->
        <!-- <form wire:submit.prevent="update()"> -->
            <h4 class="text-center mb-3 text-light">Edit Artist Information</h4>
            <div class="text-center">
            @if (!$newImage)
                <p class="fs-6 mb-0 text-light">Photo Preview:</p>
                <img src="{{ asset('public', 'storage', 'images', $image) }}" class="rounded-circle text-center mt-2" style="width:150px; height:150px">
            @else
                <img src="{{ $newImage->temporaryUrl() }}" class="rounded-circle text-center mt-2" style="width:150px; height:150px">
            @endif
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label text-light">Add a Photo</label>
                <input wire:model="newImage" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-light">Name:</label>
                <input wire:model="name" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label text-light">Description:</label>
            <textarea wire:model="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label text-light">Genre:</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input wire:model="rock" class="form-check-input" type="checkbox" id="rock" value="Rock">
                        <label class="form-check-label text-light" for="rock">Rock</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input wire:model="pop" class="form-check-input" type="checkbox" id="pop" value="Pop">
                        <label class="form-check-label text-light" for="pop">Pop</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input wire:model="rap" class="form-check-input" type="checkbox" id="rap" value="Rap">
                        <label class="form-check-label text-light" for="rap">Rap</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input wire:model="rnb" class="form-check-input" type="checkbox" id="rnb" value="R&B">
                        <label class="form-check-label text-light" for="rnb">R&B</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input wire:model="jazz" class="form-check-input" type="checkbox" id="jazz" value="Jazz">
                        <label class="form-check-label text-light" for="jazz">Jazz</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input wire:model="latin" class="form-check-input" type="checkbox" id="latin" value="Latin">
                        <label class="form-check-label text-light" for="latin">Latin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input wire:model="soul" class="form-check-input" type="checkbox" id="soul" name="genre[]" value="Soul">
                        <label class="form-check-label text-light" for="soul">Soul</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-light">Location:</label>
                <select wire:model="location" class="form-select" id="exampleFormControlSelect1">
                    <option value="">Select Location</option>
                    @foreach($locations as $loc)
                    <option value="{{ $loc }}">{{ $loc }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-light">Rate:</label>
                <input wire:model="rate" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-light">Total Transactions:</label>
                <input wire:model="total_transactions" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <button wire:click="update()" class="btn btn-primary mb-3" type="submit">Update</button>
            <button type="button" class="btn btn-secondary mb-3" wire:click="cancelUpdate">Cancel</button>
        </div>
    </div>
</div>

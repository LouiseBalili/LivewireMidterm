<div>
    <div class="container col-6 col-md-4 mt-5">
        <div class="card mb-5 p-4 shadow-sm" style="background-color:#37383b;">

        <form wire:submit.prevent="">
            <h4 class="text-center mb-3 text-light">Sign up</h4>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-light">Username</label>
                <input wire:model="username" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-light">Email</label>
            <input wire:model="email" type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-light">Password</label>
                <input wire:model="password" type="password" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-light">Confirm Password</label>
                <input wire:model="password_confirmation" type="password" class="form-control" id="exampleFormControlInput1">
            </div>

            <button class="btn btn-primary mb-3 w-100" type="submit">Sign up</button>
            <p class="text-center text-light ">
                Already have an account?
            <a href="/login">Log in</a>

        </form>

        </div>
    </div>
</div>

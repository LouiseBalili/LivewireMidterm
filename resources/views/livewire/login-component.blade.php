<div>
    <div class="container col-6 col-md-4 mt-5">
        <div class="card mb-5 p-4 shadow-sm" style="background-color:#37383b;">

        <form wire:submit.prevent="">
            <h4 class="text-center mb-3 text-light">Log in</h4>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-light">Username</label>
                <input wire:model="username" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-light">Password</label>
                <input wire:model="password" type="password" class="form-control" id="exampleFormControlInput1">
            </div>

            <button class="btn btn-primary mb-3 w-100" type="submit">Log in</button>
            <p class="text-center text-light ">
                Don't have an account yet?
            <a href="/signup">Sign up</a>

        </form>

        </div>
    </div>
</div>

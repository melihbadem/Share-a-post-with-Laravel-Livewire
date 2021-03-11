<div>
    <div class="card shadow mt-2">
        <div class="card-header">
            Register
        </div>
        <div class="card-body">
            <form wire:submit.prevent="register">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input wire:model="form.name" type="text" class="form-control" id="name" placeholder="Name">
                    @error('form.name') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input wire:model="form.email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br>
                  @error('form.email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input wire:model="form.password" type="password" class="form-control" id="password" placeholder="Password">
                  @error('form.password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="passwordConfirm">Confirm Password</label>
                    <input wire:model="form.password_confirmation" type="password" class="form-control" id="passwordConfirm" placeholder="Confirm Password">
                </div>
                <div class="form-group mt-1">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
              </form>
        </div>
    </div>
</div>

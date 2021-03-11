<div>
   <div class="card shadow mt-2">
      <div class="card-body">
         <form wire:submit.prevent="loginMethod">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input wire:model="form.email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter E-mail">
              @error('form.email')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input wire:model="form.password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
              @error('form.password')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            @if (session()->has('message'))
                <div class="text-danger"> {{ session('message') }} </div>
            @endif
          </form>
      </div>
   </div>
</div>

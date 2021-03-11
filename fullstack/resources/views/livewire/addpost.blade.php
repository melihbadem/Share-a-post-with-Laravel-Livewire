<div>
    <div class="mb-3 mt-2">
        @if (session()->has('message'))
           <div class="alert alert-success mt-1 mb-1">
               {{ session('message') }}
           </div>
         @endif
   </div>
    <form wire:submit.prevent="addPost">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea wire:model="content" name="" id="content" class="form-control  @error('content') is-invalid @enderror" placeholder="Enter post content"></textarea>
            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select wire:model="categoryId" id="category" class="form-select">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3 p-1">
              <label for="form-control">Select image: </label>
            <input class="form-control" type="file" id="image" wire:model="image">
            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
        <span wire:loading wire:target="addPost">Post adding..</span>
      </form>
</div>

<div>
  <div class="row">
    <div class="col-4">
      <livewire:category />
    </div>
    <div class="col-8">
          <div class="w-50 mx-auto mb-3 mt-2">
            @if (session()->has('message'))
              <div class="alert alert-success mt-1 mb-1">
                  {{ session('message') }}
              </div>
            @endif
      </div>
        @foreach ($posts as $post)
          <div class="card mx-auto mt-1" style="width: 50%;">
                @if (isset($post->img))
                  <img src="storage/{{$post->img}}" class="card-img-top">
                @endif
              <div class="card-body">
                  <h5 class="card-title d-inline">{{ $post->title }}</h5>
                  <span wire:click="removePost({{$post->id}})" style="float: right; cursor: pointer;" class="text-danger">&times;</span>
                  <p class="card-text">{{ $post->content }}</p>
              </div>
          </div>
        @endforeach

        <div class="w-50 mx-auto mt-1">
        {{ $posts->links() }}
        </div>
    </div>
  </div>

</div>

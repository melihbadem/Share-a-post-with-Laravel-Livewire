<div class="mt-4">
    <style type="text/css">
        .inBox {
            cursor: pointer;
            transition: all 0.5s;
        }

        .inBox :hover {
            opacity: 0.6;
        }
    </style>
    <h3>
        Categories
    </h3>
    @foreach ($categories as $category)
        <div wire:click="$emit('showId', {{ $category->id }})" class="card shadow inBox" style="margin-bottom: 5px;">
            <div class="card-header">
                {{ $category->name }}
            </div>
            <div class="card-body">
                {{ $category->description }}
            </div>
        </div>
    @endforeach
</div>

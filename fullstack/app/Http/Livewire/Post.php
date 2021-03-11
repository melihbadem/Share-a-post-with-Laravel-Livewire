<?php

namespace App\Http\Livewire;

use App\Models\PostModel;
use Livewire\{Component, WithPagination};

class Post extends Component
{
    use WithPagination;

    public $title, $content, $categoryId, $image, $categories, $category = 3;

    protected $paginationTheme = 'bootstrap', $listeners = ['showId' => 'setCategoryId'];

     public function setCategoryId($id)
     {
         $this->category = $id;
     }

    public function removePost($postId)
    {
        $deletePost = PostModel::find($postId);
        $deletePost->delete();

        $this->posts = PostModel::where("id","!=", $postId)->get();

        session()->flash('message', 'Post successfully deleted 😀');
    }

    public function render()
    {
        return view('livewire.post', [
            'posts'  => PostModel::whereCategoryId($this->category)->paginate(3)
        ])
        ->extends('index');
    }
}
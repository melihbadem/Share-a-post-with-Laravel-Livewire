<?php

namespace App\Http\Livewire;

use App\Models\{Category, PostModel};
use Livewire\{Component, WithFileUploads};

class Addpost extends Component
{
    use  WithFileUploads;

    public $title, $content, $categoryId = 1, $image, $categories;

    public function mount(){
        $this->categories = Category::all();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'title'    => ['required', 'min:3'],
            'content'  => ['required', 'min:4'],
            'image'    => ['image']
        ]);
    }

    public function addPost()
    {
        $this->validate([
            'title'    => ['required', 'min:3'],
            'content'  => ['required', 'min:4']
        ]);

        if (isset($this->image)) {
            $fileName = uniqid().".jpg";
            $this->image->storePubliclyAs('public', $fileName);
        }

        $newPost = PostModel::create([
            'category_id' => $this->categoryId,
            'title'       => $this->title,
            'content'     => $this->content,
            'img'         => isset($fileName) ? $fileName : null
        ]);

        // $this->posts->push($newPost);

        $this->title = "";
        $this->content = "";
        $fileName = "";

        session()->flash('message', 'Post successfully added 😀');
    }

    public function render()
    {
        return view('livewire.addpost')
            ->extends('index');
    }
}
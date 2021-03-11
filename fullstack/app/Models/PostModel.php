<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    public $table = "post";
    public $timestamps = false;
    
    protected $fillable = [
            'category_id',
            'title',
            'content',
            'img'
        ];

    public function getCategory() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}

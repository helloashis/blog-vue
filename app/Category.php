<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['cat_name','cat_slug','cat_status'];

    public function posts()
    {
    	return $this->hasMany(Post::class,'cat_id');
    }
}

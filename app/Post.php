<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id','cat_id','title','slug','content','thumbnail','status'];

    public function Category()
    {
    	return $this->belongsTo(Category::class,'cat_id');
    }

    public function User()
    {
    	return $this->belongsTo(User::class,'user_id')->select('id','name');
    }

}

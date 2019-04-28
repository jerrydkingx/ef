<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = ['title','description'];
}
class BlogApiModel extends Model
{

    protected $table = "blogs";
    //
  }

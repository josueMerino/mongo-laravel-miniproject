<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Mongo;

class News extends Mongo
{
    use HasFactory;
    //protected $connection = 'mongodb';
    protected $collection = 'news';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'topic', 'image', 'description', 'author'
    ];
}

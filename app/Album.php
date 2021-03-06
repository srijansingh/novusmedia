<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Album extends Model
{

    protected $table = 'albums';
    protected $fillable = [
        'id','albumname','albumdescription','albumimage','created_at','updated_at'
    ];

}

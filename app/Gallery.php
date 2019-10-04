<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

/*
 *
 * @method belongToMany(string $string)
 */

class Gallery extends Model
{
    protected $table = 'gallerys';
    protected $fillable = ['id','albumname','membername','image','created_at','updated_at'];

    public function Album(){
        return $this->belongToMany('App\Album');
    }

}

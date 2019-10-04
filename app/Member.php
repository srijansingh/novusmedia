<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = ['id','membername','profilepic','membertag','aboutmember','created_at','updated_at'];
}

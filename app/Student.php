<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User as UserEloquent;
use \App\Score as ScoreEloquent;

class Student extends Model
{
    protected $table = 'student';
    //學生對應到一個成績
    public function score(){
        return $this->hasOne(ScoreEloquent::class);
    }

    //一個學生有一個使用者帳號
    public function user(){
        return $this->belongsTo(UserEloquent::class);
    }
}

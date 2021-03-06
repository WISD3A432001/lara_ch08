<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Student as StudentEloquent;

class Score extends Model
{
    protected $table = 'score';
    //成績屬於一位學生的 (a Score belongTo a Student)
    public function student()
    {
        return $this->belongsTo(StudentEloquent::class);
    }

    //依總分排序
    public function scopeOrderByTotal($query){
        return $query->orderBy('score.total','DESC');
    }
    //依國英數排序
    public function scopeOrderBySubject($query){
        return $query->orderBy('score.chinese','DESC')->orderBy('score.english','DESC')->orderBy('score.math','DESC');
    }
}

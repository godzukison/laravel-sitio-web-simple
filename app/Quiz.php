<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public $timestamps = false;
    protected $table =  'quiz';

    protected $fillable = [
        'question1', 'question2', 'question3',
    ];

    protected $casts = [
        'question1' => 'string', 
        'question2' => 'string', 
        'question3' => 'int',
    ];

    public static function getAllQuizes(){
        return Quiz::orderBy('id', 'DESC')->get();
    }
}

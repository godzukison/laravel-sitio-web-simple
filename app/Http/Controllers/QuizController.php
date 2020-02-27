<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz as Quiz;

class QuizController extends Controller
{
 
 
    public function save(Request $request)
    {
        $model = new Quiz;
        $model->question1 = $request->input('question1');
        $model->question2 = $request->input('question2');
        $model->question3 = $request->input('question3');

        if($model->save()){
            echo "<script>alert(Guardado con éxito)</script>";
            return view('home');
        }
        
    }
}

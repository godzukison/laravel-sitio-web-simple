@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="card-body">
                <div class="card-header">Quiz</div>

                {{ Form::open(array('url' => 'quiz/save')) }}
     

                <?= Form::label('question1', '¿Que te gustaría que agregáramos al informe?');?>
                <?= Form::text('question1');?>
                <?= '<br>'?>
                <?= Form::label('question2', '¿La información es correcta?');?>
                <?= Form::select('question2', array('SI' => 'Sí', 'NO' => 'No', 'MM' => 'Más o menos'));?>
                <?= '<br>'?>
                <?= Form::label('question3', '¿Del 1 al 5, es rápido el sitio?');?>
                <?= Form::label('question3', '1');?>
                <?= Form::radio('question3', '1');?>
                <?= Form::label('question3', '2');?>
                <?= Form::radio('question3', '2');?>
                <?= Form::label('question3', '3');?>
                <?= Form::radio('question3', '3');?>
                <?= Form::label('question3', '4');?>
                <?= Form::radio('question3', '4');?>
                <?= Form::label('question3', '5');?>
                <?= Form::radio('question3', '5');?>

                <?= '<br>'?>
                <?= '<br>'?>
                <?= Form::submit('Guardar'); ?>

                {{ Form::close() }}


                </div>
                <?= '<br>'?>
                <div class="card-body">
                    <?= App\Quiz::getAllQuizes();?>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

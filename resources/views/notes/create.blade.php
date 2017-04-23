@extends('templade.main')
@section('content')

<div class="col l11 offset-l1">
            {!! Form::open(['method'=>'POST']) !!}
        <div class="form-group">
             {!! Form::textarea('note', null, array('placeholder' => 'Escribe la nota ','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
             {{Form::label('Categorias')}}   
             {{ Form::select('categoryId',$opciones) }}

        <br><br>
            {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
</div>
 @endsection 
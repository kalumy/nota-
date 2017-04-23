@extends('templade.main')
@section('content')
    
	<div class="col l11 offset-l1">
            {!! Form::open(['method'=>'PUT']) !!}
        <div class="form-group">
             {!! Form::textarea('note',$id->note, array('class' => 'form-control','style'=>'height:100px')) !!}
        </div>
        {{Form::label('Categorias')}}  
        
        {{ Form::select('categoryId',array($id->category->name,$listado)) }}
        
        <br><br>
            {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
</div>
@endsection 
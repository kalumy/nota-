@extends('templade.main')
@section('content')
        <h2 class="title"> Listado de Notas</h2>
    <div>
        <ul class="list-group">
            @foreach($notes as $note)
                <li class="list-group-item">
                    <span class="label label-info">{{ $note->note }}</span><br>
                    {{ substr ($note->note,0,120)}}...
                    <a href="{{url('web/details/'.$note->id)}}" class="btn btn-primary">ver nota</a>

                    <td><a href="{{url('web/edit/'.$note->id)}}" class="btn btn-warning">Editar</a></td>


                    <a href= "delete/{{ $note->id }}" onclick="return confirm('¿seguro que deseas elimarlo?')" class="btn btn-danger btn-delete" > Eliminar</a>
                </li>          
            @endforeach  
        </ul>
         {!! $notes->render() !!}
    </div>
    
@endsection 
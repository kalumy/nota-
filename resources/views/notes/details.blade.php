@extends('templade.main')
@section('content')
			<div>
				<h2> Notas</h2>		
				{{ $note->note }}
			</div>
			<br>Categoria: <span class="label label-info">{{ $note->category->name }} 
		 </span>				
@endsection 
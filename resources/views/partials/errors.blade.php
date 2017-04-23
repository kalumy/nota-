@if (! $errors->isEmpty())
	<div class="alert alert-danger">
		<p><strong>No es posible has superado el maximo de caracteres permitidos</strong></p>
		<ul>
			@foreach($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif	
@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Entrar no sistema</h2>
	<form action="{{ route('admin.logged') }}" method="post">
		{{ csrf_field() }}
		@include('admin.login._form')
		<button class="btn green accent-4">Entrar</button>
	</form>
</div>

@endsection
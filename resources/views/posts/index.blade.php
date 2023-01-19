@extends('app')

@section('content')
	<h1>Posts index</h1>

	@forelse ($posts as $post)
		<h3>{{ $post->title }}</h3>
	@empty
		<h3>Nenhum post encontrado</h3>
	@endforelse
	
@endsection
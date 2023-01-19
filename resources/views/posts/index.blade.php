@extends('app')

@section('content')

	<h1>Posts index</h1>
	<x-card class="bg-indigo-900">
		@forelse ($posts as $post)
			<x-post-card :post="$post"/>
		@empty
			<h3>Nenhum post encontrado</h3>
		@endforelse
	</x-card>
	
@endsection
<x-app-layout>
	<x-slot:header>
		<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			Create the tag
		</h2>

	</x-slot:header>

	<div class="max-w-md mx-auto mt-12">
		<form class="bg-slate-200 m-4 p-4" action="{{ route('tags.store') }}" method="POST">
			@csrf
			<div class="m-2 p-2">
				<label for="name">Name</label>
				<input type="text" name="name" value="{{ old('name') }}">
			</div>
			<div class="m-2 p-2">
				@error('name')
					<span class="text-red-400 text-sm">{{ $message }}</span>
				@enderror
			</div>
			<div class="m-2 p-2">
				<button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white rounded m-2 p-2">Create</button>
			</div>
		</form>
	</div>
</x-app-layout>

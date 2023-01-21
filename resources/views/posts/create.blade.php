<x-app-layout>
	<x-slot:header>
		<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			Create new post
		</h2>
	</x-slot:header>

	<div class="max-w-md mx-auto mt-12">
		<form class="bg-slate-200 m-4 p-4" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="m-2 p-2">
				<label for="title">Title</label>
				<input type="text" name="title" value="{{ old('title') }}">
			</div>
			<div class="m-2 p-2">
				@error('title')
					<span class="text-red-400 text-sm">{{ $message }}</span>
				@enderror
			</div>
            <div class="m-2 p-2">
				<label for="image">Image</label>
				<input type="file" name="image">
			</div>
			<div class="m-2 p-2">
				@error('image')
					<span class="text-red-400 text-sm">{{ $message }}</span>
				@enderror
			</div>
			<div class="m-2 p-2">
				<label for="body">Body</label>
				<input type="text" name="body" value="{{ old('body') }}">
			</div>
			<div class="m-2 p-2">
				@error('body')
					<span class="text-red-400 text-sm">{{ $message }}</span>
				@enderror
			</div>
			<div class="m-2 p-2">
				<button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white rounded m-2 p-2">Create</button>
			</div>
		</form>
	</div>
</x-app-layout>

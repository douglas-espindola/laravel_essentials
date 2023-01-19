<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		<script src="https://cdn.tailwindcss.com"></script>

		</head>
		<body class="antialiased">
			<div class="max-w-6xl mx-auto mb-8">
				{{ $header }}
			</div>

				{{ $slot }}

			<div class="max-w-6xl mx-auto">
				{{ $footer }}
			</div>
		</body>
</html>

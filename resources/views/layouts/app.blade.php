<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
	<meta charset="UTF-8">
	
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Wiki Games</title>
	
	@vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white antialiased">

<header class="border-b border-gray-800">
	<nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6 space-y-10 lg:space-y-0">
		
		<div class="flex flex-col lg:flex-row items-center space-y-5 lg:space-y-0 lg:space-x-16">
			
			<a href="/">
				<img class="w-12 flex-none" src="{{ asset('images/logo/logo.png') }}" alt="Logo">
			</a>
			
			<ul class="flex space-x-8">
				<li><a href="#" class="hover:text-gray-400">Games</a></li>
				<li><a href="#" class="hover:text-gray-400">Reviews</a></li>
				<li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
			</ul>
		</div>
		
		<div class="flex items-center">
			
			<x-search-input />
			
			<div class="ml-6">
				<a href="#">
					<img src="{{ asset('images/avatar.jpg') }}" class="rounded-full w-8" alt="avatar">
				</a>
			</div>
		</div>
	</nav>
</header>

<main class="py-8">
	{{ $slot }}
</main>

<x-footer/>

</body>
</html>
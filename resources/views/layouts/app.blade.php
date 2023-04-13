<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-base-200 pb-8">
<div class="navbar bg-base-100">
	<div class="flex-1">
		<a class="btn btn-ghost normal-case text-xl">{{ config('app.name') }}</a>
	</div>
	<div class="flex-none">
		<ul class="menu menu-horizontal px-1">
			<li><a href="{{ route('secret.create') }}">@lang('New Secret')</a></li>
			<li><a>@lang('Secrets')</a></li>
			<li><a href="{{ route('logout') }}">@lang('Logout')</a></li>
		</ul>
	</div>
</div>
<div class="max-w-5xl mx-auto">
    {{ $slot }}
</div>
@livewireScripts
</body>
</html>

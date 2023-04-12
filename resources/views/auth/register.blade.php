<!DOCTYPE html>
<html data-theme="dark">
<head>
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-base-100 flex flex-col items-center justify-center h-screen text-base-content">

<h1 class="text-4xl">{{ config('app.name') }}</h1>
<h2 class="text-sm font-thin">&copy; {{ date('Y') }} Rob Pungello</h2>
<h2 class="text-sm font-thin">v{{ config('app.version') }}</h2>

<form class="w-4xl bg-base-200 p-4 mt-4 flex flex-col rounded-md space-y-4" method="post">
    @csrf

    <div class="form-control">
        <label for="name">@lang('Name')</label>
        <input type="text" id="name" name="name" class="input input-bordered" />
        @error('name')
        <span class="rounded-sm px-2 py-1 mt-2 bg-error text-error-content">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-control">
        <label for="email">@lang('Email Address')</label>
        <input type="email" id="email" name="email" class="input input-bordered" />
        @error('email')
        <span class="rounded-sm px-2 py-1 mt-2 bg-error text-error-content">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-control">
        <label for="password">@lang('Password')</label>
        <input type="password" id="password" name="password" class="input input-bordered" />
        @error('password')
        <span class="rounded-sm px-2 py-1 mt-2 bg-error text-error-content">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-control">
        <label for="password_confirmation">@lang('Confirm Password')</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="input input-bordered" />
        @error('password_confirmation')
        <span class="rounded-sm px-2 py-1 mt-2 bg-error text-error-content">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-4">@lang('Register')</button>
</form>

</body>
</html>

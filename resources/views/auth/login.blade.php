@extends('layouts.app')

@section('content')

<div class="my-4 flex flex-col">
    {{-- breadcrumbs --}}
    <div class="flex flex-row text-sm">
        <a href="#">Oung</a>
        <span>&nbsp;/&nbsp;</span>
        <a href="{{ route('login') }}">Login</a>
    </div>
    <div class="font-bold text-xl">
        Login
    </div>
</div>

<form class="flex flex-col p-4 bg-white shadow mx-auto" action="{{ route('login') }}" method="POST">
    @csrf
    {{-- email address field --}}
    <div class="flex flex-col mb-4">
        <label for="email" class="mb-2">E-Mail Address</label>
        <input 
            type="text" 
            name="email"
            id="email"
            class="p-4 bg-gray-100 focus:outline-none focus:shadow-outline shadow"
            autofocus
        >
        @error('email')
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    {{-- password field --}}
    <div class="flex flex-col mb-4">
        <label for="password" class="mb-2">Password</label>
        <input
            type="password"
            name="password"
            id="password"
            class="p-4 bg-gray-100 focus:outline-none focus:shadow-outline shadow"
        >
        @error('password')
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    {{-- remember field --}}
    <label for="remember" class="mb-4">
        <input 
            type="checkbox"
            name="remember" 
            id="remember" {{ old('remember') ? 'checked' : '' }}
        > 
        Remember me
    </label>
    {{-- submit button --}}
    <div class="flex flex-col">
        <button type="submit" class="p-4 bg-gray-100 focus:outline-none focus:shadow-outline shadow">Login</button>
    </div>
</form>

@endsection

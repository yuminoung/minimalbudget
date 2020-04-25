@extends('layouts.app')

@section('content')

<x-headline :breadcrumbs="$breadcrumbs" class="my-4">Login</x-headline>

<form class="flex flex-col w-1/2" action="{{ route('login') }}" method="POST">
    @csrf
    {{-- email address field --}}
    <div class="flex flex-col mb-4">
        <label for="email" class="">E-Mail Address</label>
        <input 
            type="text" 
            name="email"
            id="email"
            class="p-4 bg-white shadow focus:outline-none focus:shadow-outline"
        >
        @error('email')
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    {{-- password field --}}
    <div class="flex flex-col mb-4">
        <label for="password" class="">Password</label>
        <input
            type="password"
            name="password"
            id="password"
            class="p-4 bg-white focus:outline-none focus:shadow-outline shadow"
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
        <button 
            type="submit" 
            class="p-4 bg-white focus:outline-none focus:shadow-outline shadow"
        >
            Login
        </button>
    </div>
</form>

@endsection

@extends('layouts.app')

@section('content')

<div class="my-4 flex flex-col">
    {{-- breadcrumbs --}}
    <div class="flex flex-row text-sm">
        <a href="#">Oung</a>
        <span>&nbsp;/&nbsp;</span>
        <a href="{{ route('login') }}">Login</a>
    </div>
    <div class="font-bold text-2xl">
        Login
    </div>
</div>

<form class="flex flex-col w-1/2" action="{{ route('login') }}" method="POST">
    @csrf
    {{-- email address field --}}
    <div class="flex flex-col mb-4">
        <label for="email" class="">E-Mail Address</label>
        <input 
            type="text" 
            name="email"
            id="email"
            class="p-4 bg-white focus:outline-none focus:shadow-outline shadow rounded"
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
            class="p-4 bg-white focus:outline-none focus:shadow-outline shadow rounded"
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
            class="p-4 bg-white focus:outline-none focus:shadow-outline shadow rounded"
        >
            Login
        </button>
    </div>
</form>

@endsection

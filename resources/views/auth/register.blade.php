@extends('layouts.app')

@section('content')

<div class="my-4">
    {{-- breadcrumbs --}}
    <div class="flex flex-row text-sm">
        <a href="{{ url('/')}}">Oung</a>
        <span>&nbsp;/&nbsp;</span>
        <a href="{{ route('register') }}">Register</a>
    </div>
    <div class="font-bold text-xl">
        Register
    </div>
</div>

<form 
    class="flex flex-col w-1/2" 
    action="{{ route('register') }}"
    method="POST"
>
    @csrf
    {{-- name field --}}
    <div class="flex flex-col mb-4">
        <label for="name">Name</label>
        <input 
            type="text"
            id="name" 
            name="name" 
            class="p-4 bg-white focus:outline-none focys:shadow-outline shadow focus:shadow-outline rounded"
        >
        @error('name')
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    {{-- email field --}}
    <div class="flex flex-col mb-4">
        <label for="email">E-Mail Address</label>
        <input 
            type="text" 
            id="email"
            name="email"
            class="p-4 bg-white focus:outline-none focus:shadow-outline shadow rounded"
            autocomplete="off"
        >
        @error('email')
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    {{-- password field --}}
    <div class="flex flex-col mb-4">
        <label for="password">Password</label>
        <input 
            type="password" 
            id="password"
            name="password"
            class="p-4 bg-white focus:outline-none focus:shadow-outline shadow rounded"
        >
        @error('password')
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    {{-- confirm password field --}}
    <div class="flex flex-col mb-4">
        <label for="password-confirm">Confirm Password</label>
        <input
            type="password" 
            id="password-confirm"
            name="password_confirmation"
            class="p-4 bg-white focus:outline-none focus:shadow-outline shadow rounded"
        >
    </div>
    {{-- privacy agree --}}
    <label for="privacy-policy" class="mb-4">
        <input type="checkbox" name="privacy-policy" id="privacy-policy" {{ old('remember') ? 'checked' : '' }}> I agree the privacy policy
    </label>
    {{-- submit button --}}
    <div class="flex flex-col">
        <button 
            type="submit" 
            class="p-4 bg-white focus:outline-none focus:shadow-outline shadow rounded"
        >
                Register
        </button>
    </div>
</form>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@extends('layouts.app')

@section('content')

    <x-headline :breadcrumbs="$breadcrumbs" class="mt-4">Profile</x-headline>
    
    <x-profile.navigation></x-profile.navigation>

@endsection
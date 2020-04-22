@extends('layouts.app')

@section('content')

<x-headline :breadcrumbs="$breadcrumbs">Apps</x-headline>

<div class="flex flex-col space-y-2">
    <div class="">
        <span class="font-bold">Budget</span> - Minimalist budget, expense and income tracking web app.
    </div>
    <div class="">
        <span class="font-bold">Calendar</span> - Minimalist simple to use calendar web app.
    </div>
</div>

    {{-- <div class="bg-white shadow px-4 py-2 my-4 flex flex-col">
        <div class="font-bold py-2">
            About me
        </div>
        <div class="py-2">
            <p>
                Hello, I'm Oung.
            </p>
            <p>
                My goal is to create a set of simple and minimalist web apps.
            </p>
        </div>
    </div> --}}




@endsection
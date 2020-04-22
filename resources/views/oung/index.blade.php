@extends('layouts.app')

@section('content')

<div class="my-4 flex flex-col">
    {{-- breadcrumbs --}}
    <div class="flex flex-row text-sm">
        <a href="#">Oung</a>
    </div>
    <div class="font-bold text-2xl">
        Apps
    </div>
</div>

<div class="flex flex-col space-y-4">
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
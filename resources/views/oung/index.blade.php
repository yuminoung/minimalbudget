@extends('layouts.app')

@section('content')

<x-headline :breadcrumbs="$breadcrumbs" class="my-4">Apps</x-headline>

<div class="grid grid-cols-6">
    <a href="{{ route('budget.index') }}" class="font-bold">
        Budget
    </a>
    <a href="{{ route('budget.index') }}" class="font-bold">
        Calendar
    </a>    
    <a href="{{ route('budget.index') }}" class="font-bold">
        Invoice
    </a>
    <a href="{{ route('budget.index') }}" class="font-bold">
        Todo
    </a>
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
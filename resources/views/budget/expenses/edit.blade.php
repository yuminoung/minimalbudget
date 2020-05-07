@extends('layouts.app')

@section('content')

    <x-headline :breadcrumbs="$breadcrumbs" class="my-4">
        Edit
    </x-headline>

    <budget-expense-create
        :categories="{{ $categories }}"
        :expense="{{ $expense }}"
    >
    </budget-expense-create>


@endsection
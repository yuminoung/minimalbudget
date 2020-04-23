@extends('layouts.app')

@section('content')
    <x-headline :breadcrumbs="$breadcrumbs" class="mt-4">Expenses</x-headline>
    <x-budget.navigation></x-budget.navigation>
@endsection
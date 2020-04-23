@extends('layouts.app')

@section('content')

    <x-headline :breadcrumbs="$breadcrumbs">Expenses</x-headline>
    <div class="flex flex-row">
        <ul class="space-x-4 flex flex-row">
            <x-navigation-item :href="route('budget.index')">Budget</x-navigation-item>
            <x-navigation-item :href="route('budget.expenses.index')">Expenses</x-navigation-item>
        </ul>
    </div>
@endsection
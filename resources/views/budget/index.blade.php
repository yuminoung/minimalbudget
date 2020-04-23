@extends('layouts.app')

@section('content')


<x-headline :breadcrumbs="$breadcrumbs" class="mt-4">Budget</x-headline>

<div class="flex flex-row">
    <ul class="space-x-4 flex flex-row">
        <x-navigation-item :href="route('budget.index')">Budget</x-navigation-item>
        <x-navigation-item :href="route('budget.expenses.index')">Expenses</x-navigation-item>
    </ul>
</div>


    <div class="flex flex-row space-x-4 mt-4">
        <div class="p-4 shadow bg-white flex flex-col w-1/4">
            <div class="font-bold">
                Balance
            </div>
            <div>
                $ 401,123
            </div>
        </div>
        <div class="p-4 shadow bg-white flex flex-col w-1/4">
            <div class="font-bold">
                Expense
            </div>
            <div>
                $ 1,301
            </div>
        </div>
        <div class="p-4 shadow bg-white flex flex-col w-1/4">
            <div class="font-bold">
                Income
            </div>
            <div>
                $ 5,000
            </div>
        </div>
        <div class="p-4 shadow bg-white flex flex-col w-1/4">
            <div class="font-bold">
                Budget
            </div>
            <div>
                $ 1,230
            </div>
        </div>
    </div>

@endsection
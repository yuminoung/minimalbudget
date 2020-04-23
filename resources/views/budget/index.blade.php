@extends('layouts.app')

@section('content')


<x-headline :breadcrumbs="$breadcrumbs" class="mt-4">Budget</x-headline>

<x-budget.navigation></x-budget.navigation>


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
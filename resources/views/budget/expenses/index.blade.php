@extends('layouts.app')

@section('content')
    <x-headline :breadcrumbs="$breadcrumbs" class="mt-4">Expenses</x-headline>
    <x-budget.navigation></x-budget.navigation>


    {{-- <div class="flex flex-row mb-4">
        <a href="#">Create</a>
    </div> --}}
    <div class="flex flex-col space-y-4">
        <div class="flex flex-col divide-y-2 divide-gray-700 border-gray-700 border-2 p-4">
            <div class="font-bold text-xl">
                11
            </div>
            <div class="flex flex-row justify-between">
                <div class="flex flex-col">
                    <div class="">
                        Woolworths
                    </div>
                    <div class="">
                        # bacon, eggs, milk, oil, nutella
                    </div>
                </div>
                <div class="#">
                    $ 30
                </div>
            </div>
            <div class="flex flex-row justify-between">
                <div class="flex flex-col">
                    <div class="">
                        Woolworths
                    </div>
                    <div class="">
                        # bacon, eggs, milk, oil, nutella
                    </div>
                </div>
                <div class="#">
                    $ 30
                </div>
            </div>
        </div>
    </div>

@endsection
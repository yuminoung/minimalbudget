@extends('layouts.app')

@section('content')
    {{-- title --}}
    <x-headline :breadcrumbs="$breadcrumbs" class="mt-4">Expenses</x-headline>

    {{-- main menu --}}
    <x-budget.navigation></x-budget.navigation>

    {{-- submenu --}}
    <div class="flex flex-row justify-between mb-4">
        <div class="flex flex-row items-center space-x-4">
            <input type="text" value="APR" class="w-20 px-4 py-1 text-center bg-white shadow focus:outline-none focus:shadow-outline">
            <input type="text" value="2020" class="w-20 px-4 py-1 text-center bg-white shadow focus:outline-none focus:shadow-outline">
            <input type="submit" value="Filter" class="w-20 px-4 py-1 text-center bg-white shadow focus:outline-none focus:shadow-outline">
        </div>
        <a href="{{ route('budget.expenses.create') }}" class="w-20 px-4 py-1 text-center bg-white shadow focus:outline-none focus:shadow-outline">Create</a>
    </div>

    {{-- content --}}
    <div class="flex flex-col space-y-4">
        {{-- <div class="flex flex-col divide-y-2 divide-gray-700 border-gray-700 border-2 p-4">
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
        </div> --}}
        <div class="flex flex-col shadow bg-white p-4 space-y-4">
            <div class="font-bold text-xl">
                6
            </div>
            <div class="flex flex-row justify-between">
                <div class="flex flex-col">
                    <div class="">
                        Coles
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
                        JB HIFI
                    </div>
                    <div class="">
                        # logitech gaming mouse
                    </div>
                </div>
                <div class="#">
                    $ 159
                </div>
            </div>
        </div>
    </div>

@endsection
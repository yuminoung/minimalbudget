@extends('layouts.app')

@section('content')
    {{-- title --}}
    <x-headline :breadcrumbs="$breadcrumbs" class="mt-4">Expenses</x-headline>

    {{-- main menu --}}
    <x-budget.navigation></x-budget.navigation>

    {{-- submenu --}}
    <div class="flex flex-row justify-between mb-4">
        <div class="flex flex-row space-x-4">
            <select 
                class="appearance-none rounded-none w-32 p-4 bg-white shadow focus:outline-none focus:shadow-outline"
            >
                @foreach($months as $index=>$month)
                    @if(($index + 1) === $date->month)
                    <option value="#" selected>{{ $month }}</option>
                    @else
                    <option value="#">{{ $month }}</option>
                    @endif
                @endforeach
            </select>
        <input type="text" value="{{ $date->year }}" class="w-20 p-4 bg-white shadow focus:outline-none focus:shadow-outline">
            <input type="submit" value="Filter" class="w-20 p-4 text-center bg-white shadow focus:outline-none focus:shadow-outline">
        </div>
        <a href="{{ route('budget.expenses.create') }}" class="w-20 p-4 text-center bg-white shadow focus:outline-none focus:shadow-outline">Create</a>
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
        @foreach($expenses as $date=>$expense)
            <div class="flex flex-col shadow bg-white p-4 space-y-4">
                <div class="font-bold text-xl">
                    {{ \Carbon\Carbon::parse($date)->format('jS') }}
                </div>
                @foreach($expense as $e)
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <div class="">
                                Coles
                            </div>
                            @if($e->note)
                            <div class="">
                                # {{ $e->note }}
                            </div>
                            @endif
                        </div>
                        <div class="#">
                            $ {{ $e->amount }}
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

@endsection
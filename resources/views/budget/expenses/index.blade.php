@extends('layouts.app')

@section('content')
    {{-- title --}}
    <x-headline :breadcrumbs="$breadcrumbs" class="mt-4">Expenses</x-headline>

    {{-- main menu --}}
    <x-budget.navigation></x-budget.navigation>

    {{-- submenu --}}
    <div class="flex flex-row mb-4 space-x-4">
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
        <a href="{{ route('budget.expenses.create') }}" class="p-4 text-center bg-white shadow focus:outline-none focus:shadow-outline">Create</a>
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
        @forelse($expenses as $date=>$expense)
            <x-panel :title="\Carbon\Carbon::parse($date)->format('jS')">
                @foreach($expense as $e)
                <a class="flex flex-row justify-between block" href="{{ route('budget.expenses.edit', $e) }}">
                        <div class="flex flex-col w-5/6">
                            <div class="">
                                {{ $e->category_name }}
                            </div>
                            @if($e->note)
                            <div class="text-sm">
                                {!! nl2br(e($e->note)) !!}
                            </div>
                            @endif
                        </div>
                        <div class="w-1/6 text-right">
                            $ {{ $e->amount }}
                        </div>
                    </a>
                @endforeach
            </x-panel>
        @empty
            <div class="shadow p-4 bg-white">
                Your have no expense, create
            </div>
        @endforelse
    </div>

@endsection
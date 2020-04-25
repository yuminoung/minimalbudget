@extends('layouts.app')

@section('content')

    <x-headline :breadcrumbs="$breadcrumbs" class="my-4">Create</x-headline>

    {{-- <budget-expense-create></budget-expenses-create> --}}
    <form class="flex flex-col w-1/2 space-y-4">
        {{-- Amount field --}}
        <div class="flex flex-col">
            <label for="amount">Amount</label>
            <div class="flex flex-row items-center">
                <div class="w-1/6 text-center bg-white p-4 shadow">
                    $
                </div>
                <input type="text" class="w-5/6 p-4 bg-white shadow focus:outline-none focus:shadow-outline">
            </div>
        </div>
        
        <div class="flex flex-col bg-white shadow">
            <div class="flex flex-row grid grid-cols-7 text-center text-xs">
                <div class="py-4">
                    SUN
                </div>
                <div class="py-4">
                    MON
                </div>
                <div class="py-4">
                    TUE
                </div>
                <div class="py-4">
                    WED
                </div>
                <div class="py-4">
                    THU
                </div>
                <div class="py-4">
                    FRI
                </div>
                <div class="py-4">
                    SAT
                </div>
            </div>
        </div>
       
    </form>

@endsection
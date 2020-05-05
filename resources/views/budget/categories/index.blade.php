@extends('layouts.app')

@section('content')

    <x-headline :breadcrumbs="$breadcrumbs" class="mt-4">Categories</x-headline>

    <x-budget.navigation></x-budget.navigation>

    <div class="flex flex-row">
        <a href="{{ route('budget.categories.create') }}" class="p-4 bg-white shadow block mb-4">Create</a>
    </div>


    <x-panel title="Expense" class="mb-4">
        @forelse($expenses as $expense)
            <div class="flex flex-row justify-between items-center">
                <div>
                    {{ $expense->category_name }}
                </div>
                <div class="text-xs">
                    <a href="{{ route('budget.categories.edit', $expense->id) }}" class="text-blue-700">Edit</a>
                    {{-- <a href="#" class="text-red-700">Delete</a> --}}
                </div>
            </div>
        @empty
            <div>
                Your expense category is empty
            </div>
        @endforelse
    </x-panel>

    <x-panel title="Income">
        @forelse($incomes as $income)
            <div class="flex flex-row justify-between">
                <div>
                    {{ $income->category_name }}
                </div>
                <div class="text-xs">
                    <a href="{{ route('budget.categories.edit', $income->id) }}" class="text-blue-700">Edit</a>
                </div>
            </div>
        @empty
            <div>
                Your income category is empty
            </div>
        @endforelse
    </x-panel>


@endsection
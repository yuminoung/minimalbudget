@extends('layouts.app')

@section('content')

<x-headline :breadcrumbs="$breadcrumbs" class="my-4">Create</x-headline>

<form action="{{ route('budget.categories.store') }}" method="POST" class="w-1/2 flex flex-col space-y-4">
        <div class="flex flex-col">
            <label for="category_type">Type</label>
            <select name="category_type" id="category_type"
                class="p-4 bg-white shadow focus:outline-none focus:shadow-outline appearance-none rounded-none"
            >
                <option value="expense">Expense</option>
                <option value="income">Income</option>
            </select>
        </div>

        <div class="flex flex-col">
            <label for="category_name">Category</label>
            <input type="text" id="category_name" name="category_name" class="shadow p-4 bg-white focus:outline-none focus:shadow-outline" autocomplete="off">
        </div>

        <button 
            type="submit" 
            class="shadow p-4 bg-white focus:outline-none focus:shadow-outline"
        >
            Create
        </button>
        @csrf

</form>

@endsection
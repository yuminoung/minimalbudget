@extends('layouts.app')

@section('content')

<x-headline :breadcrumbs="$breadcrumbs" class="my-4">Create</x-headline>

<form action="{{ route('budget.categories.store') }}" method="POST" class="w-1/2 flex flex-col space-y-4">
        <x-form.form-select 
            name="category_type" 
            label="Type" 
            :values="['expense' => 'Expense', 'income' => 'Income']"
        >
        </x-form.form-select>
        <x-form.form-input name="category_name" label="Category"></x-form.input>

        <button 
            type="submit" 
            class="shadow p-4 bg-white focus:outline-none focus:shadow-outline"
        >
            Create
        </button>
        @csrf

</form>

@endsection
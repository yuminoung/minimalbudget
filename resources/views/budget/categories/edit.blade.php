@extends('layouts.app')

@section('content')

    <x-headline :breadcrumbs="$breadcrumbs" class="my-4">
        Edit
    </x-headline>

    <form action="{{ route('budget.categories.update', $category) }}" method="POST" class="flex flex-col w-1/2 space-y-4">
        <x-form-input name="category_name" label="Category Name" :value="$category->category_name"></x-form-input>
        <x-form.form-button value="Update"></x-form.form-button>
        @csrf
        @method('PATCH')
    </form>

    <form action="{{ route('budget.categories.destroy', $category) }}" method="POST" class="flex flex-col w-1/2 space-y-4">
        @csrf
        @method('DELETE')
        <x-form.form-button value="Delete" class="bg-red-600 text-white"></x-form.form-button>
    </form>

@endsection
@extends('layouts.app')

@section('content')

    <x-headline :breadcrumbs="$breadcrumbs" class="my-4">Create</x-headline>

    <budget-expense-create></budget-expense-create>

@endsection
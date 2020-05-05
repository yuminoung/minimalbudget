@extends('layouts.app')

@section('content')

    <x-headline :breadcrumbs="$breadcrumbs" class="my-4">
        Edit
    </x-headline>

    {{ $expense->user_id }}

@endsection
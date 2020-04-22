<div class="my-4 flex flex-col">
    {{-- breadcrumbs --}}
    <div class="flex flex-row text-sm">
        @foreach($breadcrumbs as $key => $route)
                <a href="{{ $route }}">{{ $key }}</a>
        @endforeach
    </div>
    <div class="font-bold text-2xl">
        {{ $slot }}
    </div>
</div>
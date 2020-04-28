<div {{ $attributes->merge(['class' => 'flex flex-col cursor-default']) }}>
    {{-- breadcrumbs --}}
    <div class="flex flex-row text-xs">
        @foreach($breadcrumbs as $key => $route)
            @if($loop->first)
                <a href="{{ $route }}">{{ $key }}</a>
            @else
                <span>&nbsp;&nbsp;&sdot;&nbsp;&nbsp;</span>
                <a href="{{ $route }}">{{ $key }}</a>
            @endif

        @endforeach
    </div>
    <div class="font-bold text-2xl">
        {{ $slot }}
    </div>
</div>
<li class="{{ \Illuminate\Support\Str::is(request()->url(), $href) ? 'underline' : ''  }}">
    {{-- {{ request()->url() }}
    {{ $href }} --}}
    <a href="{{ $href }}" class="block">
        {{ $slot }}
    </a>
</li>
<div  {{ $attributes->merge(['class' => 'shadow p-4 bg-white flex flex-col space-y-4']) }}>
    <div class="font-bold text-xl">
        {{ $title }}
    </div>
    {{ $slot }}
</div>
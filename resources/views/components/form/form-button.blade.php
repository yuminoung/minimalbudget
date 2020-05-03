<button 
    type="submit"
    {{ $attributes->merge(['class' => 'p-4 shadow bg-white focus:outline-none focus:shadow-outline']) }}
>
    {{ $value }}
</button>
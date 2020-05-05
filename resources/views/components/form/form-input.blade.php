<div class="flex flex-col">
    <label for="{{ $name }}">{{ $label }}</label>
    <input 
        type="text" 
        name="{{ $name }}"
        id="{{ $name }}"
        class="shadow p-4 bg-white focus:outline-none focus:shadow-outline" 
        value="{{ old($name, $value ?? '') }}"
        autocomplete="{{ $autocomplete ?? 'off' }}"
    >
    @error($name)
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
    @enderror
</div>
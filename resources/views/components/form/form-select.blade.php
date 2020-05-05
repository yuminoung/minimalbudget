<div class="flex flex-col">
    <label for="{{ $name }}">{{ $label }}</label>
    <select 
        name="{{ $name }}" 
        id="{{ $name }}"
        class="appearance-none p-4 bg-white shadow rounded-none focus:outline-none focus:shadow-outline"
    >
        @foreach($values as $key=>$value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    @error($name)
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
    @enderror
</div>
@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-md text-gray-700 pt-5']) }}>
    {{ $value ?? $slot }}
</label>

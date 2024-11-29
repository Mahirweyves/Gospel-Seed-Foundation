@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-weight-bold text-sm text-gray-500']) }}>
    {{ $value ?? $slot }}
</label>

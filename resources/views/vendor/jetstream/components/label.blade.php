@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-dark font-bold']) }}>
    {{ $value ?? $slot }}
</label>

@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-0 border-b border-white bg-transparent uppercase color-white placeholder-white']) !!}>

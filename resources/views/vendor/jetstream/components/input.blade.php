@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-0 bg-transparent uppercase color-white placeholder-white tracking-widest']) !!}>

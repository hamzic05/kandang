@props([
    'active' => false
])

<a {{ $attributes }} class="{{ $active ? 'text-white' : 'text-slate-300'}} hover:text-white transition-colors text-[1.1rem]">{{ $menu }}</a>
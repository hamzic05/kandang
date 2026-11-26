@props([
    'heading' => '',
    'subheading' => '',
    'route' => null,
])

<div class="">
    <h1 class="font-serif text-3xl font-bold text-primary mb-1">{{ $heading }}</h1>
    <div class="flex gap-1.5 items-center">
        <p class="text-sm  text-stone-500">{{ $subheading }}</p>

        @if ($route && $attributes->has('route_label'))
            <a href="{{ route($route) }}" class=" underline text-sm">{{ $attributes->get('route_label') }}</a>
        @endif
    </div>
</div>
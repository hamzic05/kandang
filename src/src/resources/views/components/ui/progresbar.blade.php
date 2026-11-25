@props([
    'current' => 0,
    'target' => 0
])

@php
    $percentage = $target > 0 ? min(100, round(($current / $target) * 100)) : 0;
    // dd($percentage);
@endphp

<div class="bg-garis rounded-full overflow-hidden">
    <div class="h-2.5 transition-all duration-300 bg-hijau" style="width: {{ $percentage }}%"></div>
</div>
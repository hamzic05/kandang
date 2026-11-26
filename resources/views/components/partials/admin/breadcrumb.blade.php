<nav aria-label="Breadcrumb">
    <ol class="flex items-center gap-2 text-sm">

        @foreach ($breadcrumbs as $index => $item)

            @if ($index > 0)
                <li class="text-teks-lembut">/</li>
            @endif

            <li>
                @if ($item['url'])
                    <a href="{{ $item['url'] }}"
                       class="text-teks-lembut hover:text-tinta transition-colors">
                        {{ $item['title'] }}
                    </a>
                @else
                    <span
                        class="font-semibold text-tinta"
                        aria-current="page">
                        {{ $item['title'] }}
                    </span>
                @endif
            </li>

        @endforeach

    </ol>
</nav>
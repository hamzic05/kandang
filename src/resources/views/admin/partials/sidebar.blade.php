<aside class="flex flex-row flex-wrap items-center gap-1 border-b border-garis bg-white px-4 py-3
    md:w-sidebar md:flex-none md:flex-col md:items-stretch md:gap-1.5 md:border-r md:border-b-0 md:px-[18px] md:py-6">

    {{-- Logo --}}
    <a href=""
        class="mr-3 flex items-center gap-2.5 text-tinta md:mr-0 md:mb-[22px]">

        <span class="grid size-8 place-items-center rounded-[9px] bg-hijau font-display font-bold text-krem">
            K
        </span>

        <span class="font-display text-[19px] font-bold">
            Kandang Harian
        </span>
    </a>

    {{-- Menu Navigasi --}}
    <a href=""
        class="block rounded-[10px] px-3.5 py-[11px] text-[15px]
        {{ request()->routeIs('admin.dashboard') 
            ? 'bg-hijau-muda font-semibold text-tinta' 
            : 'font-medium text-teks-lembut transition-colors hover:bg-jalur' }}">
        Dashboard
    </a>

    <a href=""
        class="block rounded-[10px] px-3.5 py-[11px] text-[15px]
        {{ request()->routeIs('admin.health.*') 
            ? 'bg-hijau-muda font-semibold text-tinta' 
            : 'font-medium text-teks-lembut transition-colors hover:bg-jalur' }}">
        Kesehatan
    </a>

    <a href=""
        class="block rounded-[10px] px-3.5 py-[11px] text-[15px]
        {{ request()->routeIs('admin.feed.*') 
            ? 'bg-hijau-muda font-semibold text-tinta' 
            : 'font-medium text-teks-lembut transition-colors hover:bg-jalur' }}">
        Pakan dan obat
    </a>

    <a href=""
        class="block rounded-[10px] px-3.5 py-[11px] text-[15px]
        {{ request()->routeIs('admin.iot.*') 
            ? 'bg-hijau-muda font-semibold text-tinta' 
            : 'font-medium text-teks-lembut transition-colors hover:bg-jalur' }}">
        Kontrol IoT
    </a>

    {{-- Administrator dan Logout --}}
    <div class="mt-auto hidden border-t border-garis pt-5 md:block">

        {{-- Informasi Administrator --}}
        <div class="mb-4 flex items-center gap-3 px-2">

            <div class="flex size-9 shrink-0 items-center justify-center rounded-full bg-[#294B37] text-white">
                <i class="fas fa-user"></i>
            </div>

            <div class="flex min-w-0 flex-col">
                <span class="truncate text-sm font-semibold text-teks">
                    {{ auth()->user()->name ?? 'Administrator' }}
                </span>

                <span class="text-xs text-teks-lembut">
                    Admin Kandang
                </span>
            </div>

        </div>

        {{-- Tombol Logout --}}
        <form action="" method="POST">
            @csrf

            <button type="submit"
                class="flex w-full items-center gap-3 rounded-md border border-[#80605B] px-3 py-2.5 text-sm text-red-700 transition-colors duration-200 hover:bg-[#294B37] hover:text-white">

                <i class="fas fa-arrow-right-from-bracket text-lg"></i>

                <span>Logout</span>

            </button>
        </form>

    </div>

</aside>
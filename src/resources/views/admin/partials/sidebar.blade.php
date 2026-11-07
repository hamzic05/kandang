@php
  $isDashboardActive = request()->routeIs('admin.dashboard.*');
  //Status dropdown utama
    $isChickenHousesActive = request()->routeIs([
        'admin.houses.*',
        'admin.chickens.*',
    ]);

  $isHealthActive = request()->routeIs('admin.health.*');
  $isFeedActive = request()->routeIs('admin.feed.*');
  $isMedicineActive = request()->routeIs('admin.medicine.*');
  $isIotControllActive = request()->routeIs('admin.iot-controll.*');
  $isHouseActive = request()->routeIs('admin.houses.*');
  $isChickenMenuActive = request()->routeIs('admin.chickens.*');
  $isZoneActive = request()->routeIs('admin.zones.*');

  $isFeedAndMedicineActive = $isFeedActive || $isMedicineActive;
@endphp

<aside id="sidebar"
  class="flex flex-row flex-wrap items-center gap-1 border-b border-garis bg-white px-4 py-3 md:w-sidebar md:flex-none md:flex-col md:items-stretch md:gap-1.5 md:border-r md:border-b-0 md:px-[18px] md:py-6">
  <a href="{{ route('admin.dashboard.index') }}" class="mr-3 flex items-center gap-2.5 text-tinta md:mr-0 md:mb-[22px]">
    <span class="grid size-8 place-items-center rounded-[9px] bg-hijau font-display font-bold text-krem">K</span>
    <span class="font-display text-[19px] font-bold">Kandang Harian</span>
  </a>

  <a href="{{ route('admin.dashboard.index') }}" @if ($isDashboardActive) aria-current="page" @endif
    class="sidebar_menu block rounded-[10px] px-3.5 py-[11px] text-[15px] font-semibold text-teks-lembut aria-[current=page]:bg-hijau-muda aria-[current=page]:text-tinta transition-colors hover:bg-jalur"
    data-target="menu_dashboard" data-dropdown-trigger>
    Dashboard
  </a>

  <a href="#" @if ($isHealthActive) aria-current="page" @endif
    class="sidebar_menu block rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium text-teks-lembut transition-colors hover:bg-jalur aria-[current=page]:bg-hijau-muda aria-[current=page]:text-tinta">Kesehatan</a>

  <div class="sidebar_menu rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium text-teks-lembut">

    {{-- Header Dropdown --}}
    <div
        class="flex justify-between items-center cursor-pointer"
        data-target="menu_ayam_kamar"
        data-dropdown-trigger
    >
        <span>Zone & Kamar Ayam</span>

        <span class="arrow block text-2xl transition-transform duration-300
            {{ $isChickenHousesActive ? 'rotate-90' : '' }}">
            ▸
        </span>
    </div>

    {{-- Isi Dropdown --}}
    <div
        id="menu_ayam_kamar"
        class="grid px-2 py-[3px] transition-all duration-300 ease-in-out
        {{ $isChickenHousesActive
            ? 'grid-rows-[1fr] opacity-100'
            : 'grid-rows-[0fr] opacity-0'
        }}"
    >

        <div class="flex flex-col gap-1.5 overflow-hidden">

            {{-- Ayam --}}
            <a href="#"
                class="dropdown_menu block rounded-md px-3 py-2 transition-colors
                {{ $isChickenMenuActive
                    ? 'bg-hijau-muda text-tinta font-semibold'
                    : 'text-teks-lembut hover:bg-jalur'
                }}">
                Ayam
            </a>

            {{-- Nomor Kamar --}}
            <a href="{{ route('admin.houses.index') }}"
                class="dropdown_menu block rounded-md px-3 py-2 transition-colors
                {{ $isHouseActive
                    ? 'bg-hijau-muda text-tinta font-semibold'
                    : 'text-teks-lembut hover:bg-jalur'
                }}">
                Nomor dan Zona Kamar
            </a>
        </div>
    </div>
</div>

  <div
    class="sidebar_menu rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium text-teks-lembut transition-colors hover:bg-jalur cursor-pointer aria-[current=page]:bg-hijau-muda aria-[current=page]:text-tinta"
    @if ($isFeedAndMedicineActive) aria-current="page" @endif data-target="menu_pakan_obat" data-dropdown-parent
    data-dropdown-trigger>
    <div class="flex justify-between items-center">
      <span class="block">Pakan dan Obat</span>
      <span class="arrow block dropdown_btn text-2xl transition-transform duration-300">▸</span>
    </div>

    <div id="menu_pakan_obat"
      class="grid grid-rows-[0fr] opacity-0 px-2 py-[3px] transition-all duration-300 ease-in-out">
      <div class="flex flex-col gap-1.5 overflow-hidden">
        <a href="#" class="dropdownn_menu block">Pakan</a>
        <a href="{{ route('admin.medicine.index') }}" class="dropdown_menu block">Obat</a>
      </div>
    </div>
  </div>

  <a href="#" @if ($isIotControllActive) aria-current="page" @endif
    class="sidebar_menu block rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium text-teks-lembut transition-colors hover:bg-jalur aria-[current=page]:bg-hijau-muda aria-[current=page]:text-tinta">Kontrol
    IoT</a>

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

    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit"
        class="flex w-full items-center gap-3 rounded-md border border-[#80605B] px-3 py-2.5 text-sm text-red-700 transition-colors duration-200 hover:bg-[#294B37] hover:text-white cursor-pointer">
        <i class="fas fa-arrow-right-from-bracket text-lg"></i>
        <span>Logout</span>
      </button>
    </form>
  </div>
</aside>
<nav id="hero_section_navbar" class="fixed top-0 left-0 right-0 flex items-center justify-between border border-white/5
         bg-primary_v2 lg:bg-primary_v2/85
         px-6 py-4
         backdrop-blur-xl
         shadow-[0_0_40px_rgba(74,222,128,0.08)] z-[99]">
    <div class="hero_section_navbar_left_panel flex justify-between items-center gap-10">
        <div class="flex gap-4 items-center border">
            <div class=" rounded-2xl overflow-hidden h-fit w-[2.5rem]">
                <img src="{{ asset('/images/brands/logo K.png') }}" alt="" class="w-full h-full object-cover">
            </div>

            <h2 class=" text-md md:text-xl font-bold text-slate-300">Kandang Harian</h2>
        </div>
    </div>

    <div id="top_bar" class="hidden lg:block">
        <x-ui.navigation.nav_group class="w-xs flex justify-between"></x-ui.navigation.nav_group>
    </div>

    <div id="side_bar" class="absolute top-0 right-0 translate-x-full block w-[23rem] h-screen bg-[#07140C]/80 shadow-[0_10px_10px_rgba(0,0,0,0.5)] backdrop-blur-[10px] py-8 px-8 transition-transform duration-300 ease-in-out lg:hidden">
        <div class="h-full space-y-10">
            <div class="">

                <button id="close_ham_btn" class="block lg:hidden px-3 py-2 rounded-full hover:bg-white/4 transition-colors cursor-pointer text-lg text-white">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <x-ui.navigation.nav_group class="flex flex-col gap-[1.7rem]">
            </x-ui.navigation.nav_group>
        </div>
    </div>

    <div class="hero_section_navbar_right_panel flex items-center gap-5">
        <button class="px-3 py-2 rounded-full hover:bg-black/4 transition-colors cursor-pointer text-lg text-white">
            <i class="fa-regular fa-bell"></i>
        </button>

        <a href="{{ route('login') }}" class="rounded-full bg-white px-3 py-1 text-md font-semibold text-slate-900 transition-colors hover:bg-slate-100">
            Sign up
        </a>

        <button id="ham_btn" class="block lg:hidden px-3 py-2 rounded-full hover:bg-black/4 transition-colors cursor-pointer text-lg text-white">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>

<nav>

</nav>
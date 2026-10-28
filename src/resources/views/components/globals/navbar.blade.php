<nav id="hero_section_navbar" class=" fixed top-0 left-0 right-0 flex items-center justify-between h-18 px-7 border border-white/5
         bg-[#07140C]/85
         px-6 py-4
         backdrop-blur-xl
         shadow-[0_0_40px_rgba(74,222,128,0.08)] z-99">
    <div class="hero_section_navbar_left_panel flex justify-between items-center gap-10">
        <div class="flex gap-4 items-center">
            <div class=" rounded-2xl overflow-hidden h-fit w-[2.5rem]">
                <img src="{{ asset('/images/brands/logo K.png') }}" alt="" class="w-full h-full object-cover">
            </div>

            <h2 class=" text-md md:text-xl font-bold text-slate-300">Kandang Harian</h2>
        </div>
        <h2 class="whitespace-nowrap text-base font-bold text-slate-300 md:text-xl">
            Kandang Harian
        </h2>
    </div>

    <div class="hero_section_navbar_center_panel">
        <div id="hero_section_navbar_center_panel_nav" class="w-xs flex justify-between">
            <a href="/" :active="request()->is('/')"><x-slot:menu>Home</x-slot:menu></a>
            <a href="/blog" :active="request()->is('blog')"><x-slot:menu>Blog</x-slot:menu></a>
            <a href="/about" :active="request()->is('about')"><x-slot:menu>About</x-slot:menu></a>
            <a href="/contact" :active="request()->is('contact')"><x-slot:menu>Contact</x-slot:menu></a>
        </div>
    </div>

    <div class="hero_section_navbar_right_panel flex items-center gap-5">
        <i class="fa-regular fa-bell text-xl text-slate-300"></i>

        <a href="{{ route('login') }}"
           class="rounded-full bg-white px-3 py-1 text-base font-semibold text-slate-900 transition-colors hover:bg-slate-100">
            Sign up
        </a>

        <div class="">
            <img class=" hidden h-9 w-9 rounded-full object-cover ring-2 ring-gray-700" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Avatar Profil">
        </div>
    </div>
</nav>

<nav>

</nav>
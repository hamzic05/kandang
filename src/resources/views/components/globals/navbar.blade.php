<nav id="hero_section_navbar"
     class="sticky top-0 z-50 flex min-h-18 items-center justify-between gap-4
            border border-white/5 bg-[#07140C]/85 px-6 py-3
            backdrop-blur-xl shadow-[0_0_40px_rgba(74,222,128,0.08)]">

    <div class="hero_section_navbar_left_panel flex items-center gap-4 shrink-0">
        <div class="h-10 w-10 overflow-hidden rounded-2xl">
            <img src="{{ asset('/images/brands/logo K.png') }}" alt="Logo Kandang Harian"
                 class="h-full w-full object-cover">
        </div>
        <h2 class="whitespace-nowrap text-base font-bold text-slate-300 md:text-xl">
            Kandang Harian
        </h2>
    </div>

    <div class="hero_section_navbar_center_panel hidden md:block">
        <div id="hero_section_navbar_center_panel_nav" class="flex gap-8">
            <x-ui.navlink href="/" :active="request()->is('/')"><x-slot:menu>Home</x-slot:menu></x-ui.navlink>
            <x-ui.navlink href="/blog" :active="request()->is('blog')"><x-slot:menu>Blog</x-slot:menu></x-ui.navlink>
            <x-ui.navlink href="/about" :active="request()->is('about')"><x-slot:menu>About</x-slot:menu></x-ui.navlink>
            <x-ui.navlink href="/contact" :active="request()->is('contact')"><x-slot:menu>Contact</x-slot:menu></x-ui.navlink>
        </div>
    </div>

    <div class="hero_section_navbar_right_panel flex shrink-0 items-center gap-5">
        <i class="fa-regular fa-bell text-xl text-slate-300"></i>

        <a href="{{ route('login') }}"
           class="rounded-full bg-white px-3 py-1 text-base font-semibold text-slate-900 transition-colors hover:bg-slate-100">
            Sign up
        </a>

        <img class="hidden h-9 w-9 rounded-full object-cover ring-2 ring-gray-700"
             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
             alt="Avatar Profil">
    </div>
</nav>
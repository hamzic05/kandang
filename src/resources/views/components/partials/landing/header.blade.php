<header id="hero_section_header" class="fixed top-0 left-0 right-0 border border-white/5
         bg-primary_v2 lg:bg-primary_v2/85
         px-6 py-4
         backdrop-blur-xl
         shadow-[0_0_40px_rgba(74,222,128,0.08)] z-[99]">

    <div class="h-full flex items-center justify-between">
        <div class="hero_section_header_left_panel flex justify-between items-center gap-10">
            <div class="flex gap-4 items-center">
                <x-globals.logo/>

                <h2 class=" text-lg tablet-lg:text-xl font-bold text-white">Kandang Harian</h2>
            </div>
        </div>
        
        <nav class="hero_section_header_navbar_panel">
            <div id="top_bar" class="hidden lg:block">
                <x-ui.navigation.nav_group class="w-xs flex justify-between"></x-ui.navigation.nav_group>
            </div>
            
            <div id="side_bar" class="absolute top-0 right-0 translate-x-full block w-[23rem] h-screen bg-primary_v2/80 shadow-[0_10px_10px_rgba(0,0,0,0.5)] backdrop-blur-[10px] py-8 px-8 transition-transform duration-300 ease-in-out lg:hidden">
                <div class="h-full space-y-10">
                    <div class="">
                        <button id="close_ham_btn" class="block lg:hidden px-3 py-2 rounded-full hover:bg-white/4 transition-colors cursor-pointer text-lg text-white">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
        
                    <x-ui.navigation.nav_group class="flex flex-col gap-[1.7rem]"></x-ui.navigation.nav_group>
                </div>
            </div>
        </nav>
    
        <div class="hero_section_header_right_panel flex items-center gap-5">
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
    </div>
</header>
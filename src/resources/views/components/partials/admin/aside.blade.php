<aside id="sidebar" class="fixed h-full min-w-fit border-r bg-primary p-4">
    <div id="sidebar_toggle" class="p-2 rounded-full cursor-pointer text-white flex justify-end items-center mb-1.5">
        <i id="toggle_icon" class="fa-solid fa-angles-right"></i>
    </div>

    <div class="h-full w-full">
        <div class="pb-8 border-b border-gray-500">
            <div class="flex gap-2 items-center">
                <x-globals.logo/>

                <h2 class="sidebar_text hidden text-xl tablet-lg:text-2xl font-bold text-white">Kandang Harian</h2>
            </div>
        </div>
    
        <div class="space-y-5">
            <a href="/dashboard" class="flex items-center gap-5 rounded-md px-3 py-2.5 text-md tablet-lg:text-base text-white transition-colors duration-200 hover:bg-[#294B37] hover:text-white">
                <i class="fas fa-gauge-high text-md tablet-lg:text-lg"></i>
                <span class="sidebar_text hidden">Dashboard</span>
            </a>

            <a href="/dashboard" class="flex items-center gap-5 rounded-md px-3 py-2.5 text-md tablet-lg:text-base text-white transition-colors duration-200 hover:bg-[#294B37] hover:text-white">
                <i class="fas fa-notes-medical text-md tablet-lg:text-lg"></i>
                <span class="sidebar_text hidden">Kesehatan</span>
            </a>

            <a href="/dashboard" class="flex items-center gap-5 rounded-md px-3 py-2.5 text-md tablet-lg:text-base text-white transition-colors duration-200 hover:bg-[#294B37] hover:text-white">
                <i class="fas fa-boxes-stacked text-md tablet-lg:text-lg"></i>
                <span class="sidebar_text hidden">Pakan dan Obat</span>
            </a>

            <a href="/dashboard" class="flex items-center gap-5 rounded-md px-3 py-2.5 text-md tablet-lg:text-base text-white transition-colors duration-200 hover:bg-[#294B37] hover:text-white">
                <i class="fas fa-microchip text-md tablet-lg:text-lg"></i>
                <span class="sidebar_text hidden">Kontrol IoT</span>
            </a>
        </div>
    </div>
</aside>
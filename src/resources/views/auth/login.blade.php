<x-layouts.auth style="width: 23.5rem;">
    <x-slot:auth_part>
        <div class="">
            <h1 class="font-serif text-3xl font-bold text-primary mb-1">Login</h1>
            <div class="flex gap-1.5 items-center">
                <p class="text-sm  text-stone-500">Pengguna baru?</p>
                <a href="{{ route('register') }}" class=" underline text-sm">Buat akun baru</a>
            </div>
        </div>

        <div class="">
            <form id="form_container" action="" method="POST">
                @csrf
                <div class="field_container">
                    <div class="usernameF_container mb-3.5 space-y-1.5">
                        <label for="username" class="block text-xs font-semibold text-stone-800">Nama pengguna</label>
                        <input id="username" name="username" type="text" autocomplete="username" data-required
                        class="w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]"/>
                    </div>

                    <div class="passwordF_container mb-3.5 space-y-1.5">
                        <label for="f_pass" class="block text-xs font-semibold text-stone-800">Kata sandi</label>
                        <div class="relative">
                            <input id="f_pass" name="password" type="password" autocomplete="current-password" data-required class="w-full rounded-lg border border-stone-300 px-3 py-2 pr-16 text-sm outline-none focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]" />
                            <i id="i_visibPass" class="fa-solid fa-eye-slash absolute right-3 top-1/2 -translate-y-1/2"></i>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between mb-3.5">
                    <label class="flex items-center gap-2 text-xs text-stone-700">
                    <input type="checkbox" name="remember" class="size-3 rounded accent-primary" />
                    Ingat saya
                    </label>

                    <a href="#" class="font-semibold text-xs text-secondary hover:underline">Lupa kata sandi?</a>
                </div>

                <x-globals.error_banner/>

                <button type="submit" name="btn_submit"
                    class="mt-2 w-full h-11 rounded-lg bg-secondary py-2.5 text-md font-medium text-white hover:bg-primary transition-colors cursor-pointer">
                    Login
                </button>
            </form>
        </div>

        <div class="divider">
            <div class="flex items-center gap-1">
                <div class="border border-stone-500 flex-1 h-0"></div>
                <p class="text-md">atau</p>
                <div class="border border-stone-500 flex-1 h-0"></div>
            </div>
        </div>

        <a href="#" class="block h-11">
            <div class="h-full bg-secondary rounded-lg hover:bg-primary transition-colors">
                <div class="h-full w-full flex justify-center py-2.5 bg-secondary rounded-lg hover:bg-primary transition-colors  cursor-pointer">
                    <div class="h-full w-fit flex gap-2 items-center">
                        <div class="w-fit h-full overflow-hidden">
                            <img src="{{ asset('images/brands/google.svg.svg') }}" alt="" class="w-full h-full object-cover">
                        </div>

                        <p class=" text-md font-bold tracking-tight text-white">Lanjut dengan Google</p>
                    </div>
                </div>
            </div>
        </a>
    </x-slot:auth_part>
</x-layouts.auth>
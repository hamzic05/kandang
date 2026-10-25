<x-layouts.auth>
    <x-slot:auth_card_w>
        30rem
    </x-slot:auth_card_w>

    <x-slot:auth_card_h>
        36rem
    </x-slot:auth_card_h>

    <x-slot:auth_part>
        <div class="">
            <h1 class="font-serif text-4xl font-bold text-primary mb-1">Login</h1>
            <div class="flex gap-1.5 items-center">
                <p class="text-lg  text-stone-500">Pengguna baru?</p>
                <a href="{{ route('register') }}" class=" underline text-lg">Buat akun baru</a>
            </div>
        </div>

        <div class="">
            <form action="" method="POST">
                @csrf
                <div class="field_container">
                    <div class="usernameF_container mb-3.5">
                        <label for="username" class="block text-md font-semibold text-stone-800 mb-1.5">Nama pengguna</label>
                        <input id="username" name="username" type="text" autocomplete="username"
                        class="w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]"/>
                    </div>

                    <div class="passwordF_container mb-3.5">
                        <label for="f_pass" class="block text-md font-semibold text-stone-800 mb-1.5">Kata sandi</label>
                        <div class="relative">
                            <input id="f_pass" name="password" type="password" autocomplete="current-password" class="w-full rounded-lg border border-stone-300 px-3 py-2.5 pr-16 text-sm outline-none focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]" />
                            <i id="i_visibPass" class="fa-solid fa-eye-slash absolute right-3 top-1/2 -translate-y-1/2"></i>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between mb-3.5">
                    <label class="flex items-center gap-2 text-stone-700">
                    <input type="checkbox" name="remember" class="size-4 rounded accent-primary" />
                    Ingat saya
                    </label>

                    <a href="#" class="font-semibold text-secondary hover:underline">Lupa kata sandi?</a>
                </div>

                <button type="submit"
                    class="mt-2 w-full h-13 rounded-lg bg-secondary py-2.5 text-xl font-medium text-white hover:bg-primary transition-colors cursor-pointer">
                    Masuk
                </button>
            </form>
        </div>

        <div class="divider">
            <div class="flex items-center gap-1">
                <div class="border border-stone-500 flex-1 h-0"></div>
                <p class="text-lg">atau</p>
                <div class="border border-stone-500 flex-1 h-0"></div>
            </div>
        </div>

        <div class="h-13">
            <div class="h-full bg-secondary rounded-lg hover:bg-primary transition-colors">
                <button class="h-full w-full flex justify-center py-2.5 bg-secondary rounded-lg hover:bg-primary transition-colors  cursor-pointer">
                    <div class="h-full w-fit flex gap-2 items-center">
                        <div class="w-fit h-full overflow-hidden">
                            <img src="{{ asset('images/brands/google.svg.svg') }}" alt="" class="w-full h-full object-cover">
                        </div>

                        <p class=" text-xl font-bold tracking-tight text-white">Lanjut dengan Google</p>
                    </div>
                </button>
            </div>
        </div>
    </x-slot:auth_part>
</x-layouts.auth>
<x-layouts.auth>
    <x-slot:auth_card_w>
        45rem
    </x-slot:auth_card_w>

    <x-slot:auth_card_h>
        38rem
    </x-slot:auth_card_h>

    <x-slot:auth_part>
        <div class="">
            <h1 class="font-serif text-4xl font-bold text-primary">Regist</h1>
            <p class="text-lg  text-stone-500">Buat akun pertama anda</p>
        </div>

        <div class="">
            <form action="" method="POST">
                @csrf
                <div class="field_container grid grid-cols-2 gap-2.5">
                    <div class="usernameF_container mb-3.5">
                        <label for="username" class="block text-md font-semibold text-stone-800 mb-1.5">Nama pengguna</label>
                        <input id="username" type="text" autocomplete="username"
                        class="w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]"/>
                    </div>

                    <div class="passwordF_container mb-3.5">
                        <label for="f_pass" class="block text-md font-semibold text-stone-800 mb-1.5">Kata sandi</label>
                        <div class="relative">
                            <input id="f_pass" type="password" autocomplete="new-password" class="w-full rounded-lg border border-stone-300 px-3 py-2.5 pr-16 text-sm outline-none focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]" />
                            <i id="i_visibPass" class="fa-solid fa-eye-slash absolute right-3 top-1/2 -translate-y-1/2"></i>
                        </div>
                    </div>

                    <div class="confirmPasswordF_container mb-3.5">
                        <label for="fConfrm_pass" class="block text-md font-semibold text-stone-800 mb-1.5">Ulangi kata sandi</label>
                        <div class="relative">
                            <input id="fConfrm_pass" type="password" autocomplete="new-password"
                            class="w-full rounded-lg border border-stone-300 px-3 py-2.5 pr-16 text-sm outline-none focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]" />
                            <i id="i_visibConfirmPass" class="fa-solid fa-eye-slash absolute right-3 top-1/2 -translate-y-1/2"></i>
                        </div>
                    </div>

                    <div class="emailF_container mb-3.5">
                        <label for="email" class="block text-md font-semibold text-stone-800 mb-1.5">Email</label>
                        <input id="email" type="email" autocomplete="email"
                        class="w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]"/>
                    </div>

                    <div class="phoneF_container mb-3.5">
                        <label for="phone" class="block text-md font-semibold text-stone-800 mb-1.5">Nomor HP</label>
                        <input id="phone" type="tel" autocomplete="tel"
                        class="w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]"/>
                    </div>

                    <div class="addressF_container mb-3.5">
                        <label for="address" class="block text-md font-semibold text-stone-800 mb-1.5">Alamat</label>
                        <textarea id="address" autocomplete="street-address" rows="3"
                        class="w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a] resize-y"></textarea>
                    </div>
                </div>

                <button type="submit"
                    class="mt-2 w-full h-13 rounded-lg bg-secondary py-2.5 text-xl font-medium text-white hover:bg-primary transition-colors cursor-pointer">
                    Register
                </button>
            </form>
        </div>
    </x-slot:auth_part>
</x-layouts.auth>
<x-layouts.auth style="width: 35rem;">
    <x-slot:auth_part>
        <div class="">
            <h1 class="font-serif text-3xl font-bold text-primary">Register</h1>
            <p class="text-sm text-stone-500">Buat akun pertama anda</p>
        </div>

        <div class="">
            <form id="form_container" action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="field_container grid grid-cols-2 gap-2.5">
                    <div class="usernameF_container mb-3.5">
                        <label for="name" class="block text-xs font-semibold text-stone-800 mb-1.5">Nama
                            pengguna</label>
                        <input id="username" name="name" type="text" autocomplete="username"
                            value="{{ old('name') }}"
                            class="w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]" />
                        @error('name')
                            <p class="text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="passwordF_container mb-3.5">
                        <label for="f_pass" class="block text-xs font-semibold text-stone-800 mb-1.5">Kata
                            sandi</label>
                        <div class="relative">
                            <input id="f_pass" name="password" type="password" autocomplete="new-password"
                                class="w-full rounded-lg border border-stone-300 px-3 py-2 pr-16 text-sm outline-none focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]" />

                            <i id="i_visibPass"
                                class="fa-solid fa-eye-slash absolute right-3 top-1/2 -translate-y-1/2"></i>
                        </div>
                        @error('password')
                            <p class="text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="confirmPasswordF_container mb-3.5">
                        <label for="fConfrm_pass" class="block text-xs font-semibold text-stone-800 mb-1.5">Ulangi kata
                            sandi</label>
                        <div class="relative">
                            <input id="fConfrm_pass" name="password_confirmation" type="password"
                                autocomplete="new-password"
                                class="w-full rounded-lg border border-stone-300 px-3 py-2 pr-16 text-sm outline-none focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]" />
                            <i id="i_visibConfirmPass"
                                class="fa-solid fa-eye-slash absolute right-3 top-1/2 -translate-y-1/2"></i>
                        </div>
                    </div>

                    <div class="emailF_container mb-3.5">
                        <label for="email" class="block text-xs font-semibold text-stone-800 mb-1.5">Email</label>
                        <input id="email" name="email" type="email" autocomplete="email"
                            value="{{ old('email') }}"
                            class="w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]" />
                        @error('email')
                            <p class="text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="phoneF_container mb-3.5">
                        <label for="phone" class="block text-xs font-semibold text-stone-800 mb-1.5">Nomor HP</label>
                        <input id="phone" name="phone" type="tel" autocomplete="tel"
                            value="{{ old('phone') }}"
                            class="w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]" />
                        @error('phone')
                            <p class="text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="addressF_container mb-3.5">
                        <label for="address" class="block text-xs font-semibold text-stone-800 mb-1.5">Alamat</label>
                        <textarea id="address" name="address" autocomplete="street-address" rows="3"
                            class="w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a] resize-y"></textarea>
                        @error('address')
                            <p class="text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <button type="submit" name="btn_submit"
                    class="mt-2 w-full h-11 rounded-lg bg-secondary py-2.5 text-md font-medium text-white hover:bg-primary transition-colors cursor-pointer">
                    Register
                </button>
            </form>
        </div>
    </x-slot:auth_part>
</x-layouts.auth>

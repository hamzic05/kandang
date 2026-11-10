@extends('auth.auth')

@section('right_panel')
    <div class="bg-white w-[23.5rem] rounded-2xl shadow-sm py-[2rem] px-[2rem] h-fit">
        <div class="flex flex-col justify-between">
            <x-auth.form_header heading="Login" subheading="Pengguna baru?" route="register" route_label="Buat akun baru"/>

            <div class="mt-3">
                <form id="form_container" action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <div class="field_container">
                        <x-ui.input label="Nama Pengguna" name="name" autocomplete="name" data-required></x-ui.input>
                        <x-ui.input label="Kata sandi" name="password" type="password" autocomplete="current-password" data-required></x-ui.input>
                    </div>

                    <div class="flex justify-between mb-3.5">
                        <label class="flex items-center gap-2 text-xs text-stone-700">
                            <input type="checkbox" name="remember" class="size-3 rounded accent-primary" />
                            Ingat saya
                        </label>

                        <a href="#" class="font-semibold text-xs text-secondary hover:underline">Lupa kata sandi?</a>
                    </div>

                    <x-ui.button name="btn_submit" value="login" type="submit" label="Login" class="w-full justify-center bg-hijau hover:bg-tinta text-white"/>
                </form>
            </div>

            <div class="divider">
                <div class="flex items-center gap-1">
                    <div class="border border-stone-500 flex-1 h-0"></div>
                    <p class="text-md">atau</p>
                    <div class="border border-stone-500 flex-1 h-0"></div>
                </div>
            </div>

            <a href="{{ route('register.google') }}" class="block h-11">
                <div class="h-full bg-secondary rounded-lg hover:bg-primary transition-colors">
                    <div
                        class="h-full w-full flex justify-center py-2.5 bg-secondary rounded-lg hover:bg-primary transition-colors  cursor-pointer">
                        <div class="h-full w-fit flex gap-2 items-center">
                            <div class="w-fit h-full overflow-hidden">
                                <img src="{{ asset('images/brands/google.svg.svg') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <p class=" text-md font-bold tracking-tight text-white">Lanjut dengan Google</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
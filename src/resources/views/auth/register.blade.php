@extends('auth.auth')

@section('right_panel')
    <div class="bg-white w-[35rem] rounded-2xl shadow-sm py-[2rem] px-[2rem] h-fit">
        <div class="flex flex-col justify-between">
            <x-auth.form_header heading="Register" subheading="Sudah punya akun?" route="login" route_label="Login"/>

            <div class="mt-3">
                <form id="form_container" action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="field_container grid grid-cols-2 gap-2.5">
                        <x-ui.input label="Nama Pengguna" name="name" autocomplete="name" data-required></x-ui.input>
                        <x-ui.input label="Kata sandi" name="password" type="password" autocomplete="new-password" data-required></x-ui.input>
                        <x-ui.input label="Ulangi kata sandi" name="password-confirmation" type="password" autocomplete="new-password" data-required></x-ui.input>
                        <x-ui.input label="Email" name="email" type="email" autocomplete="email" data-required></x-ui.input>
                        <x-ui.input label="Nomor HP" name="phone" type="tel" autocomplete="tel" data-required></x-ui.input>
                        <x-ui.textarea label="Alamat" name="address" autocomplete="street-address" data-required></x-ui.textarea>
                    </div>

                    <x-ui.button name="btn_submit" value="register" type="submit" label="Registrasi" class="w-full justify-center bg-hijau hover:bg-tinta text-white"/>
                </form>
            </div>
        </div>
    </div>
@endsection
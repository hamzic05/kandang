@extends('landing.index')

@section('content')
    <div class="h-screen grid grid-cols-1 lg:grid-cols-2">
        @include('auth.left_panel')
        
        <div class="right_panel bg-[#f5f1e8] flex justify-center items-center">
            @yield('right_panel')
        </div>
    </div>
@endsection
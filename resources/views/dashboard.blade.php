@extends('layout')
    @section('content')
    <body>
        <div class="row mt-3">
            <div class="col mt-4">
                @yield('content')
            </div>
        </div>
    </body>
    @endsection
@include('footer')
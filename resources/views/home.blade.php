@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content -->
        <div role="main" class="col-md-6 ml-sm-auto col-lg-10 px-md-4">
            <div class="card" style="height:650px; max-height:600px">
               <div class="card-body">
                   <div class="row mt-4">
                        <div class="col">

                        </div>
                        <div class="col-md-4 text-center text-white bg-primary py-5 mx-4" style="border-radius: 25px;">
                            <h1>{{ $usersCount }}</h1>
                            <h2>PENGGUNA TERDAFTAR</h2>
                        </div>
                        <div class="col-md-4 text-center text-white bg-primary py-5 mx-4" style="border-radius: 25px;">
                            <h1>{{ $userActive }}</h1>
                            <h2>PENGGUNA AKTIF</h2>
                        </div>
                        <div class="col">

                        </div>
                   </div>
               </div>
            </div>
            {{-- <div class="card">
                <div class="card-body">
                    tes
                </div>
                {{-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection

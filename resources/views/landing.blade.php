@extends('layouts.app')

@section('content')

<div class="container bg-white border border-primary rounded p-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center pt-5">
           <h1>Create, share and search for <br><span class="big-text p-5">PHOTOS AFTER LIFE</span></h1>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-2 text-center bg-light pt-4 pb-4 border border-primary rounded">
            <h1>SEARCH <br>
                <span class="big-text"><i class="fas fa-search"></i></span>
            </h1>
        </div>
            <div class="col-md-2 offset-2 text-center bg-light pt-4 pb-4 border border-primary rounded">
                <h1><a href="{{ route('register') }}">JOIN US <br>
                    <span class="big-text"><i class="fas fa-user-friends"></i></span>
                    </a></h1>
            </div>

    </div>
</div>
@endsection

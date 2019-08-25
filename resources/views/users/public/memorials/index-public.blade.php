@extends('layouts.app')

@section('content')

<div class="container bg-light p-5 border border-primary rounded mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>
                Latest Photo Memories
            </h1>

        </div>
    </div>
    <div class="row">
        @auth
            @if((Auth::user()->role_id == 1 || Auth::user()->role_id == 2) && Auth::user()->is_active == 1)
                <div class="col-md-12">
                    <p><a class="btn btn-primary" href="{{route('photo-memory.create')}}">Create a Photo Memory</a></p>
                    <hr>
                    <br>
            </div>
    </div>
    <div class="row">
            @endif
        @endauth

        @if($memories)
            @foreach($memories as $memory)
                <div class="col-md-3">
                    <h3 class="text-center">
                        {{ $memory->name }}</h3>
                    <p><img class="img-fluid" src="images/uploads/{{ $memory->photo->file }}" alt="{{ $memory->name }}"> <br>
                        {{ $memory->year_born }} - {{$memory->year_died}}
                    </p>
                </div>
            @endforeach
        @endif

    </div>
</div>

@endsection

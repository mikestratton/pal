@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Latest Photo Memories
                </div>
                <div class="card-body">

                    @if((Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                        && Auth::user()->is_active == 1)
                        <p>
                            <a class="btn btn-primary" href="{{route('photo-memory.create')}}">Create a Photo Memory</a>
                        </p>
                        <hr>
                        <br>
                    @endif

                    @if($memories)

                        @foreach($memories as $memory)
                            <div class="col-md-3">
                                <p class="text-center">
                                    {{ $memory->name }} <br>
                                    <img class="img-fluid" src="images/uploads/{{ $memory->photo->file }}" alt="{{ $memory->name }}"> <br>
                                    {{ $memory->year_born }} - {{$memory->year_died}}
                                </p>

                            </div>

                        @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

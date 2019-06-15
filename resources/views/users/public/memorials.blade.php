@extends('layouts.app')

@section('content')
<div class="container bg-light p-5 rounded">
    <div class="row justify-content-center">
        <div class="col-md-3 profile-photo">
            <img class="img-fluid" src="uploads/Martin_Luther_King_Jr.jpg" alt="Martin Luther King, Jr.">
        </div>

        <div class="col-md-9 profile-description">
            <h1>Martin Luther King, Jr.</h1>
            <h5 class="pl-1">January 10, 1957 – April 4, 1968</h5>
            <p class="p-1 mt-3">Martin Luther King Jr. was an American Baptist minister and activist who became the most visible
                spokesperson and leader in the civil rights movement from 1955 until his assassination in 1968.
                Born in Atlanta, King is best known for advancing civil rights through nonviolence and civil
                disobedience, tactics his Christian beliefs and the nonviolent activism of Mahatma Gandhi helped
                inspire.</p>
        </div>
    </div>
</div>
@endsection

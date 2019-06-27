@extends('layouts.app')

@push('head')

    <!-- jQuery -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

@endpush

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create a Photo Memory') }}</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'PhotoMemoryController@store','files'=>true]) !!}
                    {{ csrf_field() }}
                    <div class="form-group row">

                        {!! Form::label('photo_id', 'Upload Photo:',
                                        ['class'=>"col-md-4 col-form-label text-md-right"]) !!}

                        <div class="col-md-6">
                            {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
                        </div>

                    </div>
                    <div class="form-group row">
                        {!! Form::label('name', 'Name', ['class'=>"col-md-4 col-form-label text-md-right"]) !!}

                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('description', 'Description:',
                                        ['class'=>"col-md-4 col-form-label text-md-right"]) !!}

                        <div class="col-md-6">
                            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('year_born', 'Date of Birth', ['class'=>"col-md-4 col-form-label text-md-right"]) !!}

                        <div class="col-md-6">
                            {!! Form::text('year_born', null, ['class' => 'form-control']) !!}
                        </div>

                    </div>
                    <div class="form-group row">
                        {!! Form::label('year_died', 'Date of Death', ['class'=>"col-md-4 col-form-label text-md-right"]) !!}

                        <div class="col-md-6">
                            {!! Form::text('year_died', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('footer-scripts')
    <script type="text/javascript">
        $( document ).ready(function() {
            $( "#year_born" ).datepicker();

        });
    </script>
@endpush
@endsection

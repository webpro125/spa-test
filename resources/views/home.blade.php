@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Loan Alert</h2>
        <div class="row" style="margin-top: 50px;">
            <div class="col-sm-6 col-sm-offset-3">
                Get loan alerts in your inbox!
            </div>
        </div>

        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-12">
                {!! Form::open(['url' => '/', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                    <!-- Email Field -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email Address', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                            <span class="help-block text-danger">
                                {{ $errors -> first('email') }}
                            </span>
                        </div>
                    </div>

                    <!-- Log In! Field -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            {!! Form::submit('Alert Me!', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
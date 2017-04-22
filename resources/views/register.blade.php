@extends('layouts.master')

@section('content')
    <div class="container">

        <h2>You are One Step Away ...</h2>

        {!! Form::open(['url' => '/register', 'class' => 'form-horizontal', 'role' => 'form']) !!}

            <div class="row" style="margin-top: 50px;">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>ZIP code</p>
                            <div class="form-group{{ $errors->has('zip_code') ? ' has-error' : '' }}">
                                <div class="col-sm-12">
                                    {!! Form::text('zip_code', null, ['class' => 'form-control']) !!}
                                    <span class="help-block text-danger">
                                        {{ $errors -> first('email') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <p>Purchase price</p>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                {!! Form::text('price', 0, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            <p>Down payment</p>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                {!! Form::text('down', 0, ['class' => 'form-control']) !!}
                                <span class="input-group-addon">20 %</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            <p>Credit score</p>
                            <select name="score" class="form-control">
                                <option value="1">720-739</option>
                            </select>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            {!! Form::checkbox('is_military', 1) !!} Military / Veteran?
                        </div>
                    </div>

                </div>

                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Annual income</p>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                {!! Form::text('annual', 0, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            <p>Monthly debts</p>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                {!! Form::text('debts', 0, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>


                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            <p>Property type</p>
                            <select name="property_type" class="form-control">
                                <option value="1">Single family home</option>
                            </select>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            <p>How is home used?</p>
                            <select name="home_used" class="form-control">
                                <option value="1">Primary residence</option>
                            </select>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            <p>First-time buyer?</p>
                            <select name="first_buyer" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            <p>New construction?</p>
                            <select name="new_construction" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="row">
                        <div class="col-sm-12">
                            {!! Form::checkbox('is_bankruptcy', 1) !!} Filed  bankruptcy?
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            {!! Form::checkbox('is_foreclosure', 1) !!} Had a foreclosure?
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            {!! Form::checkbox('is_employeed', 1) !!} Self-employed ?
                        </div>
                    </div>

                    <p style="margin-top: 30px;"><b>DESIRED LOAN PROGRAMS</b></p>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            {!! Form::checkbox('desired_loan[]', 0) !!} 30 year fixed ?
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            {!! Form::checkbox('desired_loan[]', 1) !!} 20 year fixed ?
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            {!! Form::checkbox('desired_loan[]', 2) !!} 15 year fixed ?
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            {!! Form::checkbox('desired_loan[]', 3) !!} 10 year fixed ?
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            {!! Form::checkbox('desired_loan[]', 4) !!} 7/1 ARM ?
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            {!! Form::checkbox('desired_loan[]', 5) !!} 5/1 ARM ?
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-12">
                            {!! Form::checkbox('desired_loan[]', 6) !!} 3/1 ARM ?
                        </div>
                    </div>

                    <div class="row" style="margin-top: 40px;">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    {!! Form::submit('Confirm Alert', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        {!! Form::close() !!}
    </div>
@endsection
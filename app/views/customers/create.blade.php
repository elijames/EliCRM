<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 8:17 PM
 */ ?>

@extends('layouts.main')
@section('content')

<div class = "wrapper">
    {{ Form::open(array('action'=>'CustomerController@store', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Add a Customer</h2>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

    {{Form::label('name', 'Company Name:');}}
    {{ Form::text('name', null, array('class'=>'input-block-level', 'placeholder'=>'Company Name')) }}
    {{Form::label('address1', 'Address 1:');}}
    {{ Form::text('address1', null, array('class'=>'input-block-level', 'placeholder'=>'Address 1')) }}
    {{Form::label('address2', 'Address 2:');}}
    {{ Form::text('address2', null, array('class'=>'input-block-level', 'placeholder'=>'Address 2')) }}
    {{Form::label('city', 'City:');}}
    {{ Form::text('city', null, array('class'=>'input-block-level', 'placeholder'=>'Address 2')) }}
    {{Form::label('state', 'State:');}}
    {{ Form::text('state', null, array('class'=>'input-block-level', 'placeholder'=>'Address 2')) }}
    {{Form::label('zip', 'Zip Code:');}}
    {{ Form::text('zip', null, array('class'=>'input-block-level', 'placeholder'=>'Address 2')) }}
    {{Form::label('Industry', 'Industry: ');}}
    {{ Form::text('industry', null, array('class'=>'input-block-level', 'placeholder'=>'Address 2')) }}


    {{ Form::submit('Add Customer', array('class'=>'btn btn-large btn-primary btn-block'))}}
    {{ Form::close() }}

    <br />
    <br />

</div>

@stop
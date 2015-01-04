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
    <ul style="list-style: none">
    @foreach($customers as $customer)
       <li><h3>{{link_to_action('CustomerController@show', $customer->name, $parameters = array('id' => $customer->id), $attributes = array())}}</h3></li>
    @endforeach
    </ul>

</div>
@stop
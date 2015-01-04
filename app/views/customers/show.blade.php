<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 8:17 PM
 */
?>

@extends('layouts.main')
@section('content')

<div class = "wrapper">
    <h2>{{{$customer->name}}}</h2>
    <div class="row">
    <div class="col-xs-4">
    <p><b>Address:</b></p>
    <address>{{{$customer->address1}}}<br/>
    {{{$customer->address2}}}<br/>
    {{{$customer->city}}}, {{{$customer->state}}} {{{$customer->zip}}}</address>
    </div>
    <div class="col-xs-4">
    <p><b>Industry:</b></p>
        {{{$customer->getIndustry()}}}

    </div>
    <div class="col-xs-4">
        <p><b>Contacts:</b></p>
        <ul style="list-style:none">
        @foreach($contacts as $contact)
            <li>{{link_to_action('CustomerContactController@show', $contact->fullName(), $parameters = array('id' => $contact->id), $attributes = array())}}</li>
        @endforeach
        </ul>
    </div>
    </div>


    <hr noshade size=10>
    <div class="row">
        <p><b>Notes:</b></p>
        @foreach($notes as $note)
        <div class="row">
        <div class="col-xs-4">
        <b>{{{Note::findOrFail($note->id)->created_at}}}</b><br/>
            {{{Note::findOrFail($note->id)->userName()}}}
        </div>
        <div class="col-xs-4">
            {{{Note::findOrFail($note->id)->notes}}}
        </div>
        <div class="col-xs-4">
            {{{Note::findOrFail($note->id)->contactName()}}}
        </div>
        </div>
        @endforeach
    </div>



</div>

@stop
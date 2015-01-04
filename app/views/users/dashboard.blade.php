<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 8:07 PM
 */
?>

@extends('layouts.main')
@section('content')
<div class = "wrapper">

    <h2>Welcome, {{{$user->userFirst}}}!</h2>

    <a href="/customers"><button>Customers</button></a>


</div>

@stop
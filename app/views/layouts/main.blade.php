<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 7:16 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      {{ HTML::style('css/bootstrap.min.css') }}
      {{ HTML::style('css/main.css')}}
    <title>EliCRM | A lightweight, web-based CRM solution</title>
  </head>

  <body>

  <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
          <div class="container">
              <ul class="nav">

                  @if(!Auth::check())
                  <li><h2>EliCRM</h2></li>
                  <li>{{ HTML::link('/', 'Login') }}</li>
                  @else
                  <li><h2>{{link_to_action('UserController@getDashboard', 'EliCRM', $parameters = array('user' => Auth::user()), $attributes = array())}}</h2></li>
                  <li>Welcome, {{{Auth::user()->userFirst}}}!</li>
                  <li>{{ HTML::link('users/logout', 'Logout') }}</li>
                  @endif
              </ul>
          </div>
      </div>
  </div>

  <div class="container">
      @if(Session::has('message'))
      <div class="alert">
      <p>{{ Session::get('message') }}</p>
      </div>
      @endif
  </div>

  @yield('content')

  </body>
</html>



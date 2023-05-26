@extends('layouts.app')

@section('content')

<div class="container">

<div class="jumbotron mt-4 text-center">
  <h1 class="display-4">Welcome, {{auth()->user()->name}}!</h1>
  <p class="lead">This is an user administrator, extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <br>
  <p class="lead">
    <a class="btn btn-primary" href="{{ route('users.index') }}" role="button">Manage Users</a>
    <a class="btn btn-success" href="{{ route('profile') }}" role="button">My Profile</a>
  </p>
</div>




</div>
@endsection

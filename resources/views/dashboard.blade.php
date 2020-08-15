@extends('layouts.app')

@section('content')
<div class="container">
  <div>
    <h1 class="text-center">Hi {{ Auth::user()->name }}!</h1>
  </div>
  <div class="text-center">
    <a href="/chat"  class="btn btn-primary">Join Chat</a>
  </div> 
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col=sm-4">
          <div class="user-wrapper">
            <ul class="list-group users">
              @foreach ($users as $user)
              <a href="/message/{{$user->id}}">
                  <li class="list-group-item user" id="{{$user->id}}">
                      <span class="rounded-circle"> <img src="{{$user->avatar}}" width="40" height="40" class="img-fluid" alt=""> </span>
                      <span>{{$user->name}}</span>
                  </li>
              </a>
                @endforeach
            </ul>
          </div>
        </div>
      </div>
  </div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
<div class="chat-container">
  <div class="message-holder">
    <h3>Hi I hold the message</h3>
  </div>
  <form method="POST" class="text-center" id="chat-form">
    <div>
      <input type="text" name="message" id="message" placeholder="Type your message">
      <button type="submit" class="btn btn-success">Send</button>
    </div>
  </form>  
</div> 
@endsection
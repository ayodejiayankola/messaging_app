@extends('master')

@section('title', 'Homepage')




@section('content')

<form action="/messaging_app/public/create" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter title">
    <input type="text" name="content" placeholder="Enter content">
    <input type="submit" >

</form>
<br>
    Recent Messages:
 







    <ul>
        @foreach ($messages as $message)
          <li>{{$message->title}} : {{$message->content}}  {{$message->created_at}}</li>  <br>

          <a href="/messaging_app/public/message/{$message->id}">View More</a>
        @endforeach
    </ul>



@endsection
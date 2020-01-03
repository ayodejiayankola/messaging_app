@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
    <img src="{{asset('images/logo.jpg')}}" class="rounded-circle">
               
        </div>
        <div class="col-9 pt-5">
            <div><h1>          {{ Auth::user()->username}} </h1></div>
            <div class="d-flex" >
                <div class="pr-3"><strong>10</strong> posts</div>
                <div class="pr-3"><strong>2500</strong> followers</div>
                <div class="pr-3"><strong>210</strong> following</div>
            </div>
            <div>Freecodecamp.org</div>
            <div>If the route accepts parameters, you may pass them as the second argument to the method:</div>
            <div><a href="#">Freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4 "><img src="{{asset('images/1.jpg')}}" class="w-100" /></div>
        <div class="col-4 "><img src="{{asset('images/2.jpg')}}"  class="w-100" /></div>
        <div class="col-4 "><img src="{{asset('images/3.jpg')}}" class="w-100" /></div>
    </div>
</div>
@endsection

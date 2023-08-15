@extends('layout')
@section('content')
<div class="mx-w-6xl mx-auto sm:px-6 lg:px-8">
<div class="b-1">
    
    <a href="{{route('guitars.create')}}">
    <button class="border " type="submit">NEW_COLLECTION</button>
    </a>
    </div>
    <br>
@if(count($guitars)>0)
@foreach($guitars as $guitar)
<div >
   
<ul>
       <a class="big" href="{{route('guitars.show',['guitar'=>$guitar['id']])}}"><b>{{$guitar['name']}}</b></a>

     <li>BRAND:- {{$guitar['brand']}}</li>

     <li>MANUFACTURED YEAR:- {{$guitar['year_made']}}</li>
</ul>
<hr>
</div>
@endforeach
@else
<h2>There are no guitars to display</h2>
@endif
</div>
@endsection
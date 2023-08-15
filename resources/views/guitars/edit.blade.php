@extends('layout')
@section('content')

<div class="mx-w-6xl ">
<legend><marquee behavior="alternate" direction="">EDITING GUITAR DATA</marquee></legend>
<form class="form bg-white p-6 border-1" method="POST" action="{{route('guitars.update', ['guitar'=>$guitar->id])}}">
@csrf
@method('PUT')
    <div>
        <label class="text-sm" for="name"><b>Guitar Name:</b></label>
        <input class="text-lg border-1" type="text" id="name" value="{{$guitar['name']}}" name="name"> 
        @error('name')
        <div class="form-error">
            {{$message}}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="brand"><b>Brand:</b></label>
        <input class="text-lg border-1" type="text" id="brand" value="{{$guitar->brand}}" name="brand">
        @error('brand')
        <div class="form-error">
            {{$message}}
    </div>
    @enderror
    </div>
    <div>
        <label class="text-sm"  for="year_made"><b>Year Made:</b></label>
        <input class="text-lg border-1" type="text" id="year_made" value="{{$guitar->year_made}}" name="year_made">
        @error('year')
        <div class="form-error">
            {{$message}}
       </div>
    @enderror
    </div>
    
    <div>
        <button class="border-2" type="submit">Submit</button>
    </div>
</form>

</div>
@endsection 
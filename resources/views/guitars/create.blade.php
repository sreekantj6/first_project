 @extends('layout')
@section('content')

<div class="mx-w-6xl mx-auto sm:px-6 lg:px-8 ">
 <legend><marquee behavior="alternate" direction="">NEW GUITAR DATA</marquee></legend>

 <form class="form bg-white p-6 border-1" method="POST" action="{{route('guitars.store')}}">

@csrf

    <div>
        <label class="text-sm" for="name"><b>Guitar Name :</b></label>
        <input class="text-lg border-1 " type="text" id="name" value="{{old('name')}}" name="name" placeholder="Enter Guitar Name">
        @error('name')
        <div class="form-error">
            {{$message}}
        </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="brand"><b>Brand :</b></label>
        <input class="text-lg border-1" type="text" id="brand" value="" name="brand" placeholder="Enter Brand">
        @error('brand')
        <div class="form-error">
            {{$message}}
    </div>
    @enderror
    </div>
    <div>
        <label class="text-sm" for="year_made"><b>Year Made :</b></label>
        <input class="text-lg border-1" type="text" id="year_made" value="{{old('year_made')}}" name="year_made" placeholder="Enter Year">
        @error('year_made')
        <div class="form-error">
            {{$message}}
    </div>
    @enderror
    </div>
    <div>
        <button class="border-2" type="submit">create</button>
    </div>
</form>

</div>
</div>

@endsection 
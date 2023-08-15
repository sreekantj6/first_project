 @extends('layout')
@section('content')
<div class="mx-w-6xl mx-auto sm:px-6 lg:px-8">
  <b>Guitar Information:</b>

<table >
    <tr>
        <th  >NAME</th>
        <th>BRAND</th>
        <th>YEAR_MADE</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <tr>
   <td>  {{$guitar['name']}}</td>
 <td> {{$guitar['brand']}} </td>
<td>{{$guitar['year_made']}} </td>
<td>
    <a href="{{route('guitars.edit', ['guitar'=>$guitar->id])}}">

    <button class="border1 " type="submit">xedit</button>
    </a>
</td>
<td>
<form class="form" method="POST" action="{{route('guitars.destroy',['guitar'=>$guitar->id])}}">

@csrf
    @method('DELETE')
    <button class="border2 " type="submit">delete</button>
</form>
</td>

    </tr>
</table>
</div>

@endsection 
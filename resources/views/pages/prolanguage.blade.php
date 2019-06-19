@extends('layouts.app')

@section('content')
<div class="content">
    <div class="title m-b-md">
programming language            </div>


</div>

<div class="content">
    <div class="title m-b-md">
<ul>
@foreach($myname as $mynames)
<li>
{{$mynames}} </li>
@endforeach
</ul>
  </div>


</div>
@stop

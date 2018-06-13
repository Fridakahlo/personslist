@extends('layouts.default')

@section('content')

<section class="container">
      
  		<p>{{$person ['name']}}</p>
        <p>{{$person ['job']}}</p>
        <p>{{$person ['biography']}}</p>
        <p>{{$person ['phone']}}</p>
        <p>{{$person ['mail']}}</p>
        <p>{{$person ['address']}}</p>
        <p>{{$person ['postal_code']}}</p>
        <p>{{$person ['town']}}</p>
       
        
</section>

@endsection
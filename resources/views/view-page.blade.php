@extends('layouts.default')

@section('content')
<section>
	<div class="container">	
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<img src="/img/avatar.png" class="img-fluid" alt="Responsive image">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center line">
	  			<p class="name">{{$person -> name}}</p>
	  			<p class="job">{{$person -> job}}</p>
	  		</div>	
	  	</div>
	  	<div class="row">
	  		<div class="col biography">
	  			<p>{{$person -> biography}}</p>
	  		</div>
	  	</div>
	  	<div class="row contact">
	  		<!-- <div class="col-md-12"> -->
		  		<div class="col-md-6 text-left">
		  			<p>{{$person -> address}}</p>
		  			<p>{{$person -> town}}</p>
		  		</div>
		  		<div class="col-md-6 text-right">
		  			<p>{{$person -> mail}}</p>
		  			<p>{{$person -> phone}}</p>
		  		</div>
	  	</div>
	</div>      
</section>
@endsection
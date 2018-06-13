@extends('layouts.default')

@section('content')
<section class="container">
  <div class="row col-md-12 col-sm-12 person">  
      <h1>Personnes</h1>
  </div>
    <div class="table-responsive">
      <table class="table">
        <tr>
  @foreach ($persons as $person)
        <td class="cell">{{$person ['name']}}</td>
        <td class="cell"><a href="/view-page/{{$person->id}}" type="button" class="btn btn-dark">Voir</a></td>
        
      @if ($person ['id'] %3 == 0)
        </tr><tr>
      @else 
        <td class="space"></td>
      @endif     

  @endforeach
        </tr>
    </table>  
  </div>
</section>
@endsection


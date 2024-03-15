@extends('layout.app')

@section('main-content')
<div class="jumbotron"></div>
<div class="comics">
  <div class="container pt-5 pb-5">
     <div class="row g-4">
     @foreach($comics as $comic)
     <div class="col-2">
        <div class="box">
            <img src="{{ $comic['thumb']}}" alt="">
            <h6>{{ $comic['title']}}</h6>
        </div>
      </div>
      @endforeach
     </div>
  </div>
</div>
@endsection
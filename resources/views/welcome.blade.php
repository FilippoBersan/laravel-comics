@extends('layouts.main')

@section('main')
<div class="cont_main">
     <div class=" fumetto_box">
 @foreach ($fumetti as $fumetto)
  
<div class="product">
    <img src="{{$fumetto['thumb']}}" alt="">
    <div class="title-series">
       {{$fumetto['title']}}
    </div>
   
</div>


  

 
  @endforeach


    </div>
 
</div>
    
@endsection
@extends('app')

@section('content')

<div class="mx-auto" style="width: 200px;">
    <h3>Consulta</h3>
  
  
  <ul>
   @foreach ($todo as $i)
    <li>{{ $i }}</li>  
   @endforeach
  </ul>
  
  
  <ul>
    @foreach ($todo as $i)
     <li>{{ $i->nom }}</li>  
    @endforeach
   </ul>
   
  </div>
  

@endsection
@extends('app')
@section('content')
 
<div class="mx-auto" style="width: 200px;">
  <h3>Mostrar resultat de la cerca</h3>
<ul>
  @if (count($todo)==0)
      <p>sense resultats</p>  
  @else
  @foreach ($todo as $i)
   <li>{{ $i->id }} - {{ $i->Nom }}</li>  
  @endforeach
  @endif
 </ul>
</div>
@endsection

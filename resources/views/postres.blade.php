@extends('app')

@section('content')

<style>
  h3{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-align: center;
    margin-bottom: 20px;
  }
  table, td, th{
    border: 1px solid;
    text-align: center;
    padding: 10px;
  }
  table{
    margin-left: auto;
    margin-right: auto;
  }
</style>
<div class="mx-auto">
    <h3>Receptes de la pàgina</h3>
  
   
   <table>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Número d'Ingredients</th>
      <th>Temps (minuts)</th>
      <th>Data de creació</th>
      <th>Data d'actualització</th>
      
      
    </tr>
    @foreach ($todo as $i)
    <tr>
      <td>{{ $i->id }}</td>
      <td>{{ $i->Nom }}</td>
      <td>{{ $i->Num_ingredients }}</td>
      <td>{{ $i->Minuts }}</td>
      <td>{{ $i->created_at }}</td>
      <td>{{ $i->updated_at }}</td>
    </tr>  
    @endforeach
   </table>
  </div>
  

@endsection
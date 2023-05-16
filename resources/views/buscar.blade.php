@extends('app')
@section('content')
<style>
  form input{
        background-color: #E7D2AF!important;
        border: 1px solid!important;
        width: 100%;
        border-radius: 10px;
        height: 40px;
    }
    form button{
        padding: 8px;
        border-radius: 10px;
        background-color: #92723C;
        width: 100px;
        margin-left: 300px;
        /* margin-right: auto; */
        border: 1px solid;
        font-weight: 700;
    }
    form button:hover{
        background-color: #AF8848;
        
    }
</style>
<div class="mx-auto" style="width: 200px;">
  <form name="fbuscar" class="mb-3" action="{{ route ('todos-buscar')}}" method="POST">
  @csrf  
  @if (session('success'))
     <h6 class="alert alert-success">{{session('success')}}</h6>    
  @endif
  @error('Nom')
     <h6 class="alert alert-danger">{{$message}}</h6>    
  @enderror
 
  <label for="" class="form-label">Recepta</label>
  <input type="text" name="Nom" id="" aria-describedby="helpId" placeholder="Nom a buscar">
  <button type="submit">Buscar</button>
  </form>  
</div>
@endsection

@extends('app')

@section('content')
<style>
    
    h3{
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    form{
        
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid;
    }
    form div label{
        font-weight: 700!important;
    }
    form div input{
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
<h3>Afegir Postres a la Pàgina</h3><br>

<form action="{{ route('todos') }}" method="POST">
    @csrf
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif
    @error('Nom')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        
    @enderror
    @error('Num_ingredients')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        
    @enderror
    @error('Minuts')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom de la Recepta</label><br>
        <input type="text" id="exampleFormControlInput1" placeholder="Introdueix el nom" name="Nom">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Número d'ingredients</label><br>
        <input type="text" id="exampleFormControlInput1" placeholder="exp. 5" name="Num_ingredients">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Temps necessari (en minuts)</label><br>
        <input type="text" id="exampleFormControlInput1" placeholder="exp. 30" name="Minuts">
    </div>
    
        <button type="submit" >Afegeix</button>
  
</form>
@endsection
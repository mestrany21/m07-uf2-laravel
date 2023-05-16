@extends('app')

@section('content')
<style>
    /* Establecer los estilos para los encabezados h1 y h2 */
h1 {
  font-size: 36px;
  color: #333;
  margin-bottom: 20px;
  text-align: center;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
h2 {
  font-size: 24px;
  color: #D18200;
  margin-bottom: 10px;
  text-align: center;
  width: 20%;
  margin-left: auto;
  margin-right: auto;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

/* Establecer los estilos para los párrafos */
p {
  font-size: 18px;
  line-height: 1.4;
  color: #333;
  margin-bottom: 20px;
}

/* Establecer los estilos para la imagen del logotipo */
img {
  max-width: 100%;
  height: auto;
  margin: 20px 0;
}

/* Establecer los estilos para las listas */
ul {
  list-style: none;
  padding: 0;
  margin-bottom: 20px;
}
li {
  font-size: 18px;
  line-height: 1.4;
  color: #666;
  margin-bottom: 10px;
}

#text{
  text-align: center;
  
}
#text img{
  margin-left: 15px;
}

</style>
<head>
    <title>Sobre Nosaltres</title>
  </head>
  <body>
    <h1>Sobre Nosaltres</h1>
  <div id="text">
    <p>Pàgina web de postres i dolços</p>
      <h2>INFORMACIÓ</h2>
      <p></p>
      <img src="https://icons.iconarchive.com/icons/klukeart/sweets/128/Cake-004-icon.png" width="100" height="100">
      <img src="{{URL::asset('img/pastis1.png') }}" alt="Logo de nuestra organización">
      <img src="https://icons.iconarchive.com/icons/fixicon/market/128/macaroons-icon.png" width="100" height="100">
      <img src="https://icons.iconarchive.com/icons/lemon-liu/recipes/128/recipe-dessert-cake-icon.png" width="100" height="100">
      <img src="https://icons.iconarchive.com/icons/archigraphs/tea-party/128/Tea-Cake-icon.png" width="100" height="100">
      <img src="https://icons.iconarchive.com/icons/atyourservice/service-categories/128/Sweets-icon.png" width="100" height="100">
      <img src="https://icons.iconarchive.com/icons/klukeart/cubes/128/Box-05-Cake-Sweet-icon.png" width="100" height="100">

  </div>
  </body>
@endsection
@extends('app')

@section('content')
<style>
    /* Establecer los estilos para los encabezados h1 y h2 */
h1 {
  font-size: 36px;
  color: #333;
  margin-bottom: 20px;
  text-align: center;
}
h2 {
  font-size: 24px;
  color: #666;
  margin-bottom: 10px;
  text-align: left;
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
</style>
<head>
    <title>Sobre Nosaltres</title>
  </head>
  <body>
    <h1>Sobre Nosaltres</h1>
    <p>Somos una organización dedicada a...</p>
    <h2>Nuestros Valores</h2>
    <ul>
      <li>Valor 1</li>
      <li>Valor 2</li>
      <li>Valor 3</li>
    </ul>
    <h2>Nuestro Equipo</h2>
    <p>Nuestro equipo está formado por expertos en...</p>
    <img src="{{URL::asset('img/pastis1.png') }}" alt="Logo de nuestra organización">
    <h2>Contáctanos</h2>
    <p>Para ponerte en contacto con nosotros puedes completar el siguiente formulario...</p>
  </body>
@endsection
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100"> 
    <style type="text/css"> 
      .bg-poli-azulclaro { background-color: #1FB2DE; } 
      .bg-poli-azuloscuro { background-color: #0F385A; } 
    </style> <!-- Para el color del poli -->

    <nav class="flex py-5 bg-poli-azuloscuro text-white">
        <div class="w-1/2 px-12 mr-auto">
            <a href="{{ url('/') }}"><img  class="w-1/10 px-1" src="https://www.poli.edu.co/sites/default/files/logos/logo_poli_nuevo_footer-ver5.png"></a>            
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
          <li class="py-3 px-4">
            <p class="text-xl">Bienvenido <b>{{auth()->user()->name}} <b/></p>
          </li>
          <li class="py-3">
            <a href="{{route('login.destroy')}}" class="font-semibold border-2 border-white py-2 px-2 rounded-md">Cerrar Sesión</a>          
          </li>
        @else
          <li class="py-3 mx-4" >
            <a href="{{ route('login.index')}}" class="font-semibold border-2 border white py-2 px-2 rounded-md">Iniciar Sesión</a>                        
          </li>
          <li class="py-3">
            <a href="{{ route('registro.index')}}" class="font-semibold border-2 border white py-2 px-2 rounded-md ">Registrarse</a>
          </li>
        @endif
        </ul>
    </nav>
    
    @yield('content')
  
  </body>
</html>
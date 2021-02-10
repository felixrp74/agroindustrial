<x-app-layout>  
 
    <div class="flex justify-center">
        <h1 class="text-2xl font-normal leading-normal mt-0 mb-2 text-gray-800">
            UNIVERSIDAD NACIONAL DEL ALTIPLANO PUNO
          </h1>
    </div>

 
    <div class="flex justify-center">
        <h1 class="text-2xl font-normal leading-normal mt-0 mb-2 text-gray-800">
            FACULTAD DE INGENIERIA AGROINDUSTRIAL
          </h1>
    </div>

 
    <div class="flex justify-center">
        <h1 class="text-2xl font-normal leading-normal mt-0 mb-2 text-gray-800">
            OFICINA DE ACREDITACION Y CALIDAD
          </h1>
    </div>


    <div class="container mx-auto my-4">
         
        <div class="flex space-x-4 ..."> 
            
            {{-- mecanica  --}}
            <div class="flex-1 bg-white">
                <div class="md:flex-shrink-0">
                    {{-- <div class="justify-content md:flex-shrink-0"> --}}
                    <a class="flex justify-center" href="{{route('posts.category', $categories[0])}}">
                        {{-- <img class="h-48 w-full object-cover md:w-48" src="https://img.webme.com/pic/l/larios-unap/mecanica.png" alt="Man looking at item at a store"> --}}
                        <img class="h-48 w-full object-cover md:w-48" src="https://epiai-unap.net/assets/img/logo-epiai.png" alt="Man looking at item at a store">
                    </a>
                </div> 
                <div class="p-8">
                    <a href="{{route('posts.category', $categories[0])}}" class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">mecanica</a>
                    <a href="{{route('posts.category', $categories[0])}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Respondable Ing. Giovani Branco</a>
                    <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
                </div>
            </div>

            {{-- electronica --}}
            <div class="flex-1  bg-white">
                <div class="md:flex-shrink-0">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[1])}}">
                        <img class="h-48 w-full object-cover md:w-48" src="https://portal.unap.edu.pe/sites/default/files/epie.jpg" alt="Man looking at item at a store">
                    </a>
                </div>
                <div class="p-8">
                    <a href="{{route('posts.category', $categories[1])}}" class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">ELECTRONICA</a>
                    <a href="{{route('posts.category', $categories[1])}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Respondable Ing. Merantes Barrera</a>
                    <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
                </div>
            </div>

            {{-- sistemas --}}
            <div class="flex-1  bg-white">
                <div class="md:flex-shrink-0">
                    <a class="flex justify-center" href="{{route('posts.category', $categories[2])}}">
                        <img class="h-48 w-full object-cover md:w-48" src="https://pbs.twimg.com/profile_images/2137261758/episunap_400x400.png" alt="Man looking at item at a store">
                    </a>
                </div>
                <div class="p-8">
                    <a href="{{route('posts.category', $categories[2])}}" class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">sistemas</a>
                    <a href="{{route('posts.category', $categories[2])}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Respondable Ing. Milder Zanabria</a>
                    <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
                </div>
            </div>
        </div>
    </div>
  
</x-app-layout>



      {{-- MECANICA  https://img.webme.com/pic/l/larios-unap/mecanica.png --}}
      {{-- ELECTRONICA https://portal.unap.edu.pe/sites/default/files/epie.jpg  --}}
      {{--  SISTEMAS LOGO https://pbs.twimg.com/profile_images/2137261758/episunap_400x400.png --}}
 
      

{{-- 
    Publicaciones con titutlo imagen y tag.
    
    traer posts de la BD y mostrarlo en la interfaz: resources/views/posts/index.blade.php
    tag es un texto para representar una categoria.
    
    
    --}}

 
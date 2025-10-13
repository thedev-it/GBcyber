<div>
    @extends('layout.app')
    @section('content')
       <!-- Header -->
      <header class="mb-6">
        <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900">Outils recommandés</h1>
        <p class="mt-1 text-sm text-gray-600">Sélection d'outils fiables pour renforcer votre sécurité numérique</p>
      </header>
  
      <!-- Section: Antivirus -->
      
        @foreach ($outils as $outil )
        <div class="flex items-center gap-3">
            <!-- icon -->
            <div class="bg-blue-50 p-3 rounded-xl mt-3" >
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" class="text-blue-600" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2l7 3v4c0 5-3.5 9.6-7 11-3.5-1.4-7-6-7-11V5l7-3z" fill="currentColor"/>
              </svg>
            </div>
            <h2 class="text-lg sm:text-xl font-semibold">{{$outil->type_outil}}</h2>
          </div>
          <!-- Card content -->
          <div class="mt-4">
            <div class="bg-white card-radius border border-gray-100 shadow-md p-4 sm:p-6">
              <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                <div class="flex-1">
                  <div class="flex items-center gap-3">
                    <h3 class="text-xl font-semibold">{{$outil->titre}}</h3>
                    <!-- rating -->
                    <div class="ml-2 flex items-center text-yellow-500 text-sm">
                      <!-- stars: 4.5 style -->
                      <div class="flex -space-x-1">
                        <svg class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.447a1 1 0 00-.364 1.118l1.287 3.95c.3.921-.755 1.688-1.54 1.118l-3.37-2.447a1 1 0 00-1.176 0L5.21 18.91c-.785.57-1.84-.197-1.54-1.118l1.287-3.95a1 1 0 00-.364-1.118L1.223 9.277c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.05 2.927z"/></svg>
                        <svg class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.447a1 1 0 00-.364 1.118l1.287 3.95c.3.921-.755 1.688-1.54 1.118l-3.37-2.447a1 1 0 00-1.176 0L5.21 18.91c-.785.57-1.84-.197-1.54-1.118l1.287-3.95a1 1 0 00-.364-1.118L1.223 9.277c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.05 2.927z"/></svg>
                        <svg class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.447a1 1 0 00-.364 1.118l1.287 3.95c.3.921-.755 1.688-1.54 1.118l-3.37-2.447a1 1 0 00-1.176 0L5.21 18.91c-.785.57-1.84-.197-1.54-1.118l1.287-3.95a1 1 0 00-.364-1.118L1.223 9.277c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.05 2.927z"/></svg>
                        <svg class="w-4 h-4 text-yellow-300" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.447a1 1 0 00-.364 1.118l1.287 3.95c.3.921-.755 1.688-1.54 1.118l-3.37-2.447a1 1 0 00-1.176 0L5.21 18.91c-.785.57-1.84-.197-1.54-1.118l1.287-3.95a1 1 0 00-.364-1.118L1.223 9.277c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.05 2.927z"/></svg>
                      </div>
                    </div>
                  </div>
    
                  <p class="mt-3 text-gray-600">{{$outil->description}}</p>  
                </div>
                <!-- right column: price pill + button on desktop -->
                <div class="sm:w-48 flex flex-col justify-between items-end gap-4">
                  <div class="self-end">
                    <span class="inline-block bg-green-50 text-green-700 text-sm font-semibold px-3 py-1 pill border border-green-100">{{$outil->tarification}}</span>
                  </div>
                  <div class="w-full">
                    <a href="{{$outil->lien_outil}}" class="inline-flex items-center justify-center w-full sm:w-full py-3 px-4 text-white font-medium rounded-lg shadow-sm bg-blue-600 hover:bg-blue-700 transition">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none"><path d="M14 3h7v7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 14L21 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 21H3V3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                      En savoir plus
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

    @endsection
</div>
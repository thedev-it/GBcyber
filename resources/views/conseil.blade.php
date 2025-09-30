<div>
    @extends('layout.app')
    @section('content')

       <div class="bg-white rounded-lg shadow p-4 flex items-center justify-between hover:bg-gray-50 transition">
          <!-- Partie gauche (icône + texte) -->
          <div class="flex items-center space-x-4">
            <!-- Icône -->
            <div class="bg-white p-3 rounded-full flex items-center justify-center">
              <img src="{{$conseils->image}}" alt="icone" class="h-12 w-full md:h-20 md:w-fulL object-contain">
            </div>
        
            <!-- Texte -->
            <div>
              <p class="font-semibold text-base md:text-lg">{{$conseils->titre}}</p>
              <p class="text-sm text-gray-600 md:text-base">{{$conseils->sous_titre}}</p>
            </div>
          </div> 
        </div>
        <div class="bg-white mt-2 rounded-lg shadow p-4 flex items-center justify-between hover:bg-gray-50 transition">
            <P>{{$conseils->description}}</P>
        </div> 
      <a href="/">
          <div class="bg-white mt-2 rounded-lg w-20 shadow p-4 flex items-center justify-between hover:bg-gray-50 transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
              </svg>
          </div>   
      </a>
        
        
    @endsection
</div>
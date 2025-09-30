@extends('layout.app')
@section('content')
<main class="max-w-6xl mx-auto px-4 py-8">

  <!-- Section Intro -->
  <section class="bg-blue-600 text-white p-8 rounded-xl mb-8">
    <h2 class="text-3xl font-bold">GBCyber 🛡</h2>
    <p class="mt-2 text-lg">Protégez vos données. Prévenez les menaces.</p>
    <p class="text-sm opacity-90 mt-1">Votre guide complet pour la cybersécurité personnelle et professionnelle</p>
  </section>

  <!-- Conseils rapides -->
  <section class="mb-10">
    <h3 class="text-2xl font-semibold mb-6">Conseils rapides</h3>

    <div class="grid gap-6 md:grid-cols-3">

      {{-- faire une boucle --}}
       @foreach ($conseil as $conseils )
       <a wire:navigate href="/conseil/{{$conseils->id}}">
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
        
          <!-- Flèche à droite -->
          <svg xmlns="http://www.w3.org/2000/svg" 
               class="h-5 w-5 text-gray-400 md:h-6 md:w-6 flex-shrink-0" 
               fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M9 5l7 7-7 7" />
          </svg>
        </div>
       </a>
      
       @endforeach
      

    </div>
  </section>

  <!-- Alertes récentes -->
  <section>
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-2xl font-semibold">Alertes récentes</h3>
      <a href="/alertes" class="text-blue-600 text-sm ">Voir tout</a>
    </div>

    <div class="space-y-4">

       {{-- faire une boucle  --}}
 

       @foreach ( $alerte as  $alertes)
        @php
            if ($alertes->status === 'faible') {
                $colors = 'bg-blue-100 p-6 rounded border-l-4 border-blue-500 text-blue-700 p-6 rounded';
            } elseif ($alertes->status === 'modéré') {
                $colors = 'bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-6 rounded';
            } else { // critique ou par défaut
                $colors = 'bg-red-100 border-l-4 border-red-500 text-red-700 p-6 rounded';
            }
        @endphp
       <div class="{{$colors}}">
        <p class="font-semibold text-lg">{{$alertes->titre}}</p>
        <p class="text-sm mt-1">{{$alertes->sous_titre}}</p>
        <p class="text-xs mt-2 text-gray-600">{{$alertes->created_at}}</p>
      </div>
       @endforeach
      

    </div>
  </section>
  
  <section class="  py-8">
      <h2 class="text-xl font-semibold mb-6">Accès rapide</h2>
    
      <!-- Grid responsive -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    
        <!-- Carte Particuliers -->
        <div class="flex items-start p-5 bg-white rounded-lg shadow hover:shadow-md transition">
          <div class="text-blue-600 text-3xl mr-4">
            <!-- Icône utilisateur -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
              <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-base font-semibold">Particuliers</h3>
            <p class="text-sm text-gray-600">Conseils personnels</p>
          </div>
        </div>
    
        <!-- Carte Entreprises -->
        <div class="flex items-start p-5 bg-white rounded-lg shadow hover:shadow-md transition">
          <div class="text-blue-600 text-3xl mr-4">
            <!-- Icône entreprise -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
              <path d="M3 21V3h6v2h6V3h6v18h-4v-6H7v6H3zm10-8h4V7h-4v6zm-6 0h4V7H7v6z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-base font-semibold">Entreprises</h3>
            <p class="text-sm text-gray-600">Sécurité pro</p>
          </div>
        </div>
      </div>
    </section>
</main>
  
@endsection
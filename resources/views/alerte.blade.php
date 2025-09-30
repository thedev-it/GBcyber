<div>
    @extends('layout.app')
    @section('content')
        <!-- Alertes récentes -->
  <section>
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-2xl font-semibold">Alertes récentes</h3>
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
                <h3 class="font-bold italic">{{$alertes->status}}</h3>
                <p class="font-semibold text-lg">{{$alertes->titre}}</p>
                <p class="text-sm mt-1">{{$alertes->sous_titre}}</p>
                <p class="text-xs mt-2 text-gray-600">{{$alertes->created_at}}</p>
            </div>
       @endforeach
    </div>
  </section>
    @endsection
</div>
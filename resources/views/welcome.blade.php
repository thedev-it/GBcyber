<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GBcyber</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-Poppins">

  <!-- Navbar -->
  <header class="bg-blue-950 text-white">
    <div class="max-w-8xl mx-auto flex justify-between items-center px-6 py-4">
      
      <!-- Logo -->
      <img src="{{ asset('logo.png') }}" alt="Logo GBcyber" class="h-20">
  
      <!-- Navigation -->
      <nav class="hidden md:flex gap-6 text-sm">
        <a href="#" class="hover:text-blue-400">Accueil</a>
        <a href="#" class="hover:text-blue-400">Bonnes pratiques</a>
        <a href="#" class="hover:text-blue-400">Outils & Technologie</a>
        <a href="#" class="hover:text-blue-400">Alertes</a>
        <a href="#" class="hover:text-blue-400">Légal & docs</a>
        <a href="#" class="hover:text-blue-400">Nous Contacter</a>
      </nav>
    </div>
  </header>
  

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
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-start">
          <span class="text-3xl mb-3">🔒</span>
          <p class="font-semibold text-lg">Mots de passe forts</p>
          <p class="text-sm text-gray-600 mt-1">Utilisez des mots de passe uniques et complexes</p>
        </div>

        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-start">
          <span class="text-3xl mb-3">🛡️</span>
          <p class="font-semibold text-lg">Double authentification</p>
          <p class="text-sm text-gray-600 mt-1">Activez la 2FA sur tous vos comptes importants</p>
        </div>

        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-start">
          <span class="text-3xl mb-3">👁️</span>
          <p class="font-semibold text-lg">Vigilance phishing</p>
          <p class="text-sm text-gray-600 mt-1">Vérifiez toujours l'expéditeur de vos emails</p>
        </div>
      </div>
    </section>

    <!-- Alertes récentes -->
    <section>
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-2xl font-semibold">Alertes récentes</h3>
        <a href="#" class="text-blue-600 text-sm hover:underline">Voir tout</a>
      </div>

      <div class="space-y-4">
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-6 rounded">
          <p class="font-semibold text-lg">Nouvelle campagne de phishing par email</p>
          <p class="text-sm mt-1">Des emails frauduleux se font passer pour des banques populaires</p>
          <p class="text-xs mt-2 text-gray-600">Il y a 2 heures</p>
        </div>

        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-6 rounded">
          <p class="font-semibold text-lg">Mise à jour de sécurité critique</p>
          <p class="text-sm mt-1">Windows et macOS ont publié des correctifs importants</p>
          <p class="text-xs mt-2 text-gray-600">Il y a 1 jour</p>
        </div>
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

  <!-- Footer mobile -->
  <nav class="fixed bottom-0 left-0 w-full bg-white shadow flex justify-around py-2 md:hidden">
    <a href="#" class="text-blue-600 text-sm flex flex-col items-center">🏠<span>Accueil</span></a>
    <a href="#" class="text-gray-500 text-sm flex flex-col items-center">📚<span>Astuces</span></a>
    <a href="#" class="text-gray-500 text-sm flex flex-col items-center">🛠️<span>Outils</span></a>
    <a href="#" class="text-gray-500 text-sm flex flex-col items-center">📄<span>Légal</span></a>
    <a href="#" class="text-gray-500 text-sm flex flex-col items-center">⚠️<span>Alertes</span></a>
    <a href="#" class="text-gray-500 text-sm flex flex-col items-center">📞<span>Contact</span></a>
  </nav>

  {{-- Footer desctop --}}

  <footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-6 py-12">
      <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-8">
        
        <!-- Logo + description -->
        <div class="md:w-1/3">
          <h2 class="text-2xl font-bold mb-2">GB-Cyrber</h2>
          <p class="text-gray-400">Protégez vos données et apprenez a vous protéger des  menaces grâce à nos conseils  et  solutions avancées de cybersécurité.</p>
        </div>
  
        <!-- Navigation -->
        <div class="md:w-1/3 flex justify-between">
          <div>
            <h3 class="text-lg font-semibold mb-2">Services</h3>
            <ul class="space-y-1 text-gray-400">
              <li><a href="#" class="hover:text-blue-400">Sécurité Réseau</a></li>
              <li><a href="#" class="hover:text-blue-400">Censibilisation</a></li>
              <li><a href="#" class="hover:text-blue-400"></a></li>
            </ul>
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-2">Entreprise</h3>
            <ul class="space-y-1 text-gray-400">
              <li><a href="#" class="hover:text-blue-400">À propos</a></li>
              <li><a href="#" class="hover:text-blue-400">Blog</a></li>
              <li><a href="#" class="hover:text-blue-400">Contact</a></li>
            </ul>
          </div>
        </div>
  
        <!-- Réseaux sociaux -->
        <div class="md:w-1/3">
          <h3 class="text-lg font-semibold mb-2">Suivez-nous</h3>
          <div class="flex gap-4">
            <a href="#" class="text-gray-400 hover:text-blue-500">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879v-6.987H7.898v-2.892h2.54V9.845c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.465h-1.26c-1.242 0-1.63.772-1.63 1.562v1.875h2.773l-.443 2.892h-2.33v6.987C18.343 21.128 22 16.991 22 12z"/>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-blue-400">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0022.4 1s-1.4.83-2.63 1a4.48 4.48 0 00-7.66 4.1A12.77 12.77 0 013 2.86s-4 9 5 13a13.06 13.06 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-pink-500">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c-5.456 0-9.837 4.381-9.837 9.837 0 4.352 2.82 8.042 6.695 9.332.49.09.668-.213.668-.475 0-.235-.008-.858-.012-1.683-2.725.593-3.298-1.313-3.298-1.313-.446-1.133-1.09-1.434-1.09-1.434-.891-.609.068-.597.068-.597.985.069 1.503 1.012 1.503 1.012.875 1.498 2.296 1.065 2.855.815.089-.632.343-1.065.623-1.31-2.174-.247-4.463-1.087-4.463-4.838 0-1.068.38-1.941 1.002-2.624-.1-.247-.434-1.243.095-2.593 0 0 .817-.262 2.68 1.001a9.33 9.33 0 014.872 0c1.862-1.263 2.678-1.001 2.678-1.001.53 1.35.197 2.346.097 2.593.623.683 1.002 1.556 1.002 2.624 0 3.761-2.293 4.588-4.475 4.832.353.304.667.905.667 1.826 0 1.318-.012 2.381-.012 2.703 0 .263.176.568.672.471A9.843 9.843 0 0021.837 12c0-5.456-4.381-9.837-9.837-9.837z"/>
              </svg>
            </a>
          </div>
        </div>
  
      </div>
  
      <div class="mt-12 border-t border-gray-800 pt-6 text-center text-gray-500 text-sm">
        &copy; 2025 GBcyrber by Gilles Brant. Tous droits réservés.
      </div>
    </div>
  </footer>
  

</body>
</html>

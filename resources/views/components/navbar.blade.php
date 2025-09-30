 <!-- Navbar -->
 <header class="bg-blue-950 text-white relative z-50">
    <div class="max-w-8xl mx-auto flex justify-between items-center px-6 py-4">
      
      <!-- Logo -->
     <a href="/">
      <img src="{{ asset('logo.png') }}" alt="Logo GBcyber" class="h-20">
     </a>
  
      <!-- Navigation desktop -->
      <nav class="hidden md:flex gap-6 text-sm">
        <a wire:navigate href="/" class="hover:text-blue-400">Accueil</a>
        <a wire:navigate  href="#" class="hover:text-blue-400">Bonnes pratiques</a>
        <a wire:navigate  href="#" class="hover:text-blue-400">Outils & Technologie</a>
        <a wire:navigate  href="/alertes" class="hover:text-blue-400">Alertes</a>
        <a wire:navigate href="#" class="hover:text-blue-400">Légal & docs</a>
        <a wire:navigate href="#" class="hover:text-blue-400">Nous Contacter</a>
      </nav>

      <!-- Bouton burger mobile -->
      <button id="burger" class="md:hidden text-white text-3xl focus:outline-none">
        ☰
      </button>
    </div>
  </header>


  <!-- Overlay + Menu mobile -->
  <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40"></div>

  <div id="mobileMenu" class="fixed top-0 left-0 w-3/4 max-w-xs h-full bg-blue-950 text-white p-6 transform -translate-x-full transition-transform duration-300 ease-in-out z-50">
    <button id="closeMenu" class="text-white text-2xl mb-6">✕</button>
    <nav class="flex flex-col gap-4 text-lg">
      <a href="/" class="flex items-center gap-2 hover:text-blue-400">🏠 Accueil</a>
      <a href="#" class="flex items-center gap-2 hover:text-blue-400">📚 Bonnes pratiques</a>
      <a href="#" class="flex items-center gap-2 hover:text-blue-400">🛠️ Outils & Technologie</a>
      <a href="/alertes" class="flex items-center gap-2 hover:text-blue-400">⚠️ Alertes</a>
      <a href="#" class="flex items-center gap-2 hover:text-blue-400">📄 Légal & docs</a>
      <a href="#" class="flex items-center gap-2 hover:text-blue-400">📞 Nous Contacter</a>
    </nav>
  </div>
  
  <!-- Script burger -->
  <script>
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobileMenu');
    const closeMenu = document.getElementById('closeMenu');
    const overlay = document.getElementById('overlay');

    burger.addEventListener('click', () => {
      mobileMenu.classList.remove('-translate-x-full');
      overlay.classList.remove('hidden');
    });

    closeMenu.addEventListener('click', () => {
      mobileMenu.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });

    overlay.addEventListener('click', () => {
      mobileMenu.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });
  </script>
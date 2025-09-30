<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🛡 GBcyber</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-Poppins">

  {{-- Navbar --}}
  @include('components.navbar')

  <main class=" max-w-6xl mx-auto px-4 py-8">
      @yield('content')
  </main>

  {{-- Footer --}}
  @include('components.footer')
</body>
</html>

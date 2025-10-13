<div>
    @extends('layout.app')
    @section('content')
        <header class="mb-10 text-center">
          <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900">💻 Bonnes pratiques en matière de cybersécurité</h1>
          <p class="mt-2 text-gray-600 text-base sm:text-lg max-w-3xl mx-auto">Découvrez les meilleures stratégies pour renforcer votre sécurité numérique, que ce soit à titre personnel ou au sein de votre entreprise.</p>
        </header>
    
        <!-- Section 1: Bonnes pratiques personnelles -->
        <section class="mb-14">
          <h2 class="text-2xl font-semibold text-blue-700 mb-6">🔒 Bonnes pratiques personnelles</h2>
          <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Existing cards + new ones -->
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" class="w-12 h-12 mb-3" alt="mot de passe" />
              <h3 class="font-bold text-gray-900 mb-2">Utilisez des mots de passe forts</h3>
              <p class="text-sm text-gray-600">Mélangez lettres, chiffres et symboles, et évitez les mots évidents comme les dates de naissance.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/3342/3342137.png" class="w-12 h-12 mb-3" alt="2FA" />
              <h3 class="font-bold text-gray-900 mb-2">Activez l’authentification à deux facteurs</h3>
              <p class="text-sm text-gray-600">Ajoutez une couche supplémentaire de sécurité à vos comptes sensibles.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/992/992700.png" class="w-12 h-12 mb-3" alt="update" />
              <h3 class="font-bold text-gray-900 mb-2">Mettez à jour vos appareils</h3>
              <p class="text-sm text-gray-600">Installez régulièrement les mises à jour pour corriger les failles de sécurité.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/711/711191.png" class="w-12 h-12 mb-3" alt="backup" />
              <h3 class="font-bold text-gray-900 mb-2">Sauvegardez vos données</h3>
              <p class="text-sm text-gray-600">Conservez des copies de vos fichiers importants sur un support externe ou cloud sécurisé.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/619/619034.png" class="w-12 h-12 mb-3" alt="phishing" />
              <h3 class="font-bold text-gray-900 mb-2">Soyez vigilant face au phishing</h3>
              <p class="text-sm text-gray-600">Vérifiez toujours la source avant de cliquer sur un lien ou d’ouvrir une pièce jointe.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/929/929409.png" class="w-12 h-12 mb-3" alt="privacy" />
              <h3 class="font-bold text-gray-900 mb-2">Protégez votre vie privée</h3>
              <p class="text-sm text-gray-600">Réglez les paramètres de confidentialité de vos réseaux sociaux pour limiter les informations publiques.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/3524/3524630.png" class="w-12 h-12 mb-3" alt="vpn" />
              <h3 class="font-bold text-gray-900 mb-2">Utilisez un VPN</h3>
              <p class="text-sm text-gray-600">Protégez vos communications et vos données lors de la navigation sur des réseaux publics.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" class="w-12 h-12 mb-3" alt="logout" />
              <h3 class="font-bold text-gray-900 mb-2">Déconnectez-vous des sessions ouvertes</h3>
              <p class="text-sm text-gray-600">Fermez vos sessions sur les sites sensibles après utilisation, surtout sur des appareils partagés.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/1041/1041882.png" class="w-12 h-12 mb-3" alt="device security" />
              <h3 class="font-bold text-gray-900 mb-2">Sécurisez vos appareils mobiles</h3>
              <p class="text-sm text-gray-600">Activez un code PIN, une empreinte digitale ou une reconnaissance faciale.</p>
            </div>
          </div>
        </section>
    
        <!-- Section 2: Bonnes pratiques pour les entreprises -->
        <section>
          <h2 class="text-2xl font-semibold text-green-700 mb-6">🏢 Bonnes pratiques pour les entreprises</h2>
          <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/4228/4228739.png" class="w-12 h-12 mb-3" alt="formation" />
              <h3 class="font-bold text-gray-900 mb-2">Formez vos employés</h3>
              <p class="text-sm text-gray-600">Sensibilisez votre personnel aux risques de cybersécurité et aux bonnes pratiques à adopter.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/5977/5977590.png" class="w-12 h-12 mb-3" alt="policy" />
              <h3 class="font-bold text-gray-900 mb-2">Définissez une politique de sécurité</h3>
              <p class="text-sm text-gray-600">Élaborez des règles claires concernant l’accès, les mots de passe et l’usage des appareils.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/1041/1041916.png" class="w-12 h-12 mb-3" alt="backup" />
              <h3 class="font-bold text-gray-900 mb-2">Sauvegardes régulières</h3>
              <p class="text-sm text-gray-600">Planifiez des sauvegardes automatiques et testez la restauration pour garantir la continuité d’activité.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/3064/3064202.png" class="w-12 h-12 mb-3" alt="encryption" />
              <h3 class="font-bold text-gray-900 mb-2">Chiffrez les données sensibles</h3>
              <p class="text-sm text-gray-600">Protégez les informations critiques pendant le stockage et le transfert.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="w-12 h-12 mb-3" alt="incident" />
              <h3 class="font-bold text-gray-900 mb-2">Préparez un plan de réponse aux incidents</h3>
              <p class="text-sm text-gray-600">Anticipez les cyberattaques avec des procédures et rôles bien définis.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/1019/1019607.png" class="w-12 h-12 mb-3" alt="access control" />
              <h3 class="font-bold text-gray-900 mb-2">Contrôlez les accès</h3>
              <p class="text-sm text-gray-600">Limitez les privilèges selon les rôles et appliquez la séparation des tâches.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/4228/4228703.png" class="w-12 h-12 mb-3" alt="firewall" />
              <h3 class="font-bold text-gray-900 mb-2">Utilisez un pare-feu et antivirus professionnel</h3>
              <p class="text-sm text-gray-600">Déployez des solutions réseau et endpoint robustes pour surveiller les menaces.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/2166/2166824.png" class="w-12 h-12 mb-3" alt="audit" />
              <h3 class="font-bold text-gray-900 mb-2">Réalisez des audits de sécurité</h3>
              <p class="text-sm text-gray-600">Effectuez des tests de pénétration et des contrôles réguliers sur vos systèmes.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" class="w-12 h-12 mb-3" alt="gdpr" />
              <h3 class="font-bold text-gray-900 mb-2">Respectez les réglementations (RGPD, ISO, etc.)</h3>
              <p class="text-sm text-gray-600">Assurez-vous de la conformité légale pour éviter les sanctions et renforcer la confiance.</p>
            </div>
            <div class="bg-white p-6 shadow-sm border border-gray-100 card-radius hover:shadow-lg hover:scale-105 transition transform flex flex-col items-center text-center">
              <img src="https://cdn-icons-png.flaticon.com/512/929/929430.png" class="w-12 h-12 mb-3" alt="monitoring" />
              <h3 class="font-bold text-gray-900 mb-2">Surveillez en continu votre infrastructure</h3>
              <p class="text-sm text-gray-600">Utilisez des outils de monitoring pour détecter toute activité suspecte.</p>
            </div>
          </div>
        </section>
    @endsection
</div>
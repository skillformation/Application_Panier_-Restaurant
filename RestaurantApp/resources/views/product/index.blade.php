{{-- @dd($products);  --}} 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface de commande de pizzas</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inclure la police Inter -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Style personnalisé pour la barre de défilement */
        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
        /* Animation simple pour les boutons */
        .button-animation:hover {
            transform: translateY(-2px);
            transition: transform 0.2s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100 antialiased">

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar Gauche -->
        <div class="w-20 bg-white flex flex-col items-center py-6 shadow-md rounded-r-2xl">
            <div class="mb-8">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xl">C</div>
            </div>
            <nav class="flex flex-col space-y-6">
                <!-- Les icônes SVG sont utilisées pour une meilleure qualité et adaptabilité -->
                <a href="#" class="flex flex-col items-center text-gray-400 hover:text-blue-500 group transition-colors duration-200">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001 1h3v-9m-9 0h9"></path></svg>
                    <span class="text-xs">Home</span>
                </a>
                <a href="#" class="flex flex-col items-center text-gray-400 hover:text-blue-500 group transition-colors duration-200">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    <span class="text-xs">Table</span>
                </a>
                <a href="#" class="flex flex-col items-center text-blue-500 transition-colors duration-200">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                    <span class="text-xs">Menu</span>
                </a>
                <a href="#" class="flex flex-col items-center text-gray-400 hover:text-blue-500 group transition-colors duration-200">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                    <span class="text-xs">Order</span>
                </a>
                <a href="#" class="flex flex-col items-center text-gray-400 hover:text-blue-500 group transition-colors duration-200">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span class="text-xs">History</span>
                </a>
                <a href="#" class="flex flex-col items-center text-gray-400 hover:text-blue-500 group transition-colors duration-200">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 2v-6m2 2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h2m0 0h2m4 0h2m4 0h2m0 0a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2z"></path></svg>
                    <span class="text-xs">Report</span>
                </a>
                <a href="#" class="flex flex-col items-center text-gray-400 hover:text-blue-500 group transition-colors duration-200">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    <span class="text-xs">Alert</span>
                </a>
            </nav>
            <div class="mt-auto flex flex-col items-center">
                <a href="#" class="flex flex-col items-center text-gray-400 hover:text-blue-500 group transition-colors duration-200 mb-6">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.525.322 1.34 0 1.724-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span class="text-xs">Settings</span>
                </a>
                <div class="mt-2 text-center">
                    <img src="https://placehold.co/40x40/94a3b8/ffffff?text=P" alt="Profil" class="rounded-full w-10 h-10 object-cover border-2 border-white shadow-sm mx-auto">
                    <span class="text-xs mt-1 text-gray-500">Profil</span>
                </div>
            </div>
        </div>

        <!-- Contenu Principal -->
        <div class="flex-1 flex flex-col p-6 overflow-hidden">
            <!-- Barre du haut -->
            <div class="flex flex-col sm:flex-row items-center justify-between mb-6 space-y-4 sm:space-y-0">
                <div class="relative w-full sm:w-1/3">
                    <input type="text" placeholder="Search category or menu" class="pl-10 pr-4 py-2 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full shadow-sm">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <div class="text-red-500 font-medium text-sm">5 items out of stocks</div>
                <div class="flex items-center space-x-4">
                    <div class="text-gray-600 text-sm hidden sm:block">Current Orders</div>
                    <div class="font-bold text-lg">#907653</div>
                    <div class="text-gray-600 text-sm hidden sm:block">Table</div>
                    <div class="font-bold text-lg">T1</div>
                </div>
            </div>

            <!-- Catégories -->
            <div class="flex space-x-3 sm:space-x-4 mb-6 overflow-x-auto pb-2 custom-scrollbar">
                @foreach ($categories as $item)
                    <button class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-xl shadow-md flex-shrink-0 button-animation">
                        <img src="https://placehold.co/20x20/ffffff/000000?text=P" alt="Icône Pizza" class="w-5 h-5 mr-2 opacity-0">
                        {{ $item->name }}
                    </button>
                @endforeach
             
                
            </div>

            
            <!-- Section Choisir Pizza -->
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold">Choose Pizza</h2>
                <div class="text-gray-600 text-sm">10 Pizza Result</div>
            </div>

            <!-- Grille des Pizzas -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 overflow-y-auto custom-scrollbar pr-2 flex-1">
                @foreach ($products as $item)
                    <!-- Élément de pizza 1 -->
                <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center text-center hover:shadow-xl transition-shadow duration-200 cursor-pointer">
                    <img src="https://placehold.co/150x150/f0f0f0/666666?text=Pizza" alt="Pizza American Favorite" class="w-40 h-40 rounded-full object-cover mb-3 shadow-sm">
                    <h3 class="text-lg font-semibold">{{$item->name }}</h3>
                    <p class="text-blue-600 font-bold text-xl">{{$item->price }}</p>
                    <p class="text-gray-500 text-sm">18 Pan Available</p>
                </div>
                @endforeach
                
                
            </div>
        </div>

        <!-- Résumé de la commande à droite -->
        <div class="w-96 bg-white p-6 shadow-lg flex flex-col rounded-l-2xl overflow-hidden hidden md:flex">
            <!-- Boutons Dine In / Take Away -->
            <div class="flex mb-4">
                <button class="flex-1 py-2 rounded-l-lg bg-blue-500 text-white text-center font-semibold button-animation">Dine In</button>
                <button class="flex-1 py-2 rounded-r-lg bg-gray-200 text-gray-700 text-center font-semibold hover:bg-gray-300 button-animation">Take Away</button>
            </div>

            <!-- Liste des articles commandés -->
            <div class="flex-1 overflow-y-auto custom-scrollbar pr-2 -mr-2">
                <!-- Article de commande 1 -->
                <div class="flex items-center mb-4 bg-gray-50 p-3 rounded-xl border border-gray-200">
                    <img src="https://placehold.co/60x60/f0f0f0/666666?text=Jus" alt="Jus d'orange" class="w-16 h-16 rounded-lg object-cover mr-4">
                    <div class="flex-1">
                        <h4 class="font-semibold text-lg">Orange Juice</h4>
                        <p class="text-gray-500 text-sm">Note: Less Ice</p>
                        <p class="font-bold text-blue-600">$2,87</p>
                    </div>
                    <div class="flex items-center border border-gray-300 rounded-full">
                        <button class="px-3 py-1 text-gray-600 font-bold hover:bg-gray-200 rounded-l-full">-</button>
                        <span class="px-3">4</span>
                        <button class="px-3 py-1 text-gray-600 font-bold hover:bg-gray-200 rounded-r-full">+</button>
                    </div>
                </div>

                <!-- Article de commande 2 -->
                <div class="flex items-center mb-4 bg-gray-50 p-3 rounded-xl border border-gray-200">
                    <img src="https://placehold.co/60x60/f0f0f0/666666?text=Pizza" alt="Pizza American Favorite" class="w-16 h-16 rounded-lg object-cover mr-4">
                    <div class="flex-1">
                        <h4 class="font-semibold text-lg">American Favorite</h4>
                        <p class="text-gray-500 text-sm">Crust: Stuffed Crust Sosis</p>
                        <p class="text-gray-500 text-sm">Extras: Extra Mozarella</p>
                        <p class="font-bold text-blue-600">$4,87</p>
                    </div>
                    <div class="flex items-center border border-gray-300 rounded-full">
                        <button class="px-3 py-1 text-gray-600 font-bold hover:bg-gray-200 rounded-l-full">-</button>
                        <span class="px-3">1</span>
                        <button class="px-3 py-1 text-gray-600 font-bold hover:bg-gray-200 rounded-r-full">+</button>
                    </div>
                </div>

                <!-- Article de commande 3 -->
                <div class="flex items-center mb-4 bg-gray-50 p-3 rounded-xl border border-gray-200">
                    <img src="https://placehold.co/60x60/f0f0f0/666666?text=Pizza" alt="Pizza Super Supreme" class="w-16 h-16 rounded-lg object-cover mr-4">
                    <div class="flex-1">
                        <h4 class="font-semibold text-lg">Super Supreme</h4>
                        <p class="text-gray-500 text-sm">Crust: Stuffed Crust Cheese</p>
                        <p class="font-bold text-blue-600">$5,75</p>
                    </div>
                    <div class="flex items-center border border-gray-300 rounded-full">
                        <button class="px-3 py-1 text-gray-600 font-bold hover:bg-gray-200 rounded-l-full">-</button>
                        <span class="px-3">1</span>
                        <button class="px-3 py-1 text-gray-600 font-bold hover:bg-gray-200 rounded-r-full">+</button>
                    </div>
                </div>
                
                <!-- Article de commande 4 -->
                <div class="flex items-center mb-4 bg-gray-50 p-3 rounded-xl border border-gray-200">
                    <img src="https://placehold.co/60x60/f0f0f0/666666?text=Pizza" alt="Pizza Favorite Cheese" class="w-16 h-16 rounded-lg object-cover mr-4">
                    <div class="flex-1">
                        <h4 class="font-semibold text-lg">Favorite Cheese</h4>
                        <p class="text-gray-500 text-sm">Crust: Stuffed Crust Sosis</p>
                        <p class="font-bold text-blue-600">$6,75</p>
                    </div>
                    <div class="flex items-center border border-gray-300 rounded-full">
                        <button class="px-3 py-1 text-gray-600 font-bold hover:bg-gray-200 rounded-l-full">-</button>
                        <span class="px-3">1</span>
                        <button class="px-3 py-1 text-gray-600 font-bold hover:bg-gray-200 rounded-r-full">+</button>
                    </div>
                </div>

            </div>

            <!-- Totaux et bouton d'impression -->
            <div class="mt-4 pt-4 border-t border-gray-200">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-gray-600">Items(7)</span>
                    <span class="font-bold">$28,67</span>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-gray-600">Tax(10%)</span>
                    <span class="font-bold">$2,86</span>
                </div>
                <div class="flex justify-between items-center text-xl font-bold mb-6">
                    <span>Total</span>
                    <span>$31,53</span>
                </div>
                <button class="w-full bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 transition-colors duration-200 button-animation">Print Bills</button>
            </div>
        </div>
    </div>

</body>
</html>
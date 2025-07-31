@props(['product'])
<div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center text-center hover:shadow-xl transition-shadow duration-200 cursor-pointer">
    {{-- Si vous avez un champ 'image' sur votre produit, vous pourriez l'utiliser ici. Ex: asset('storage/' . $product->image) --}}
    <img src="https://placehold.co/150x150/f0f0f0/666666?text=Pizza" alt="Pizza {{ $product->name }}" class="w-40 h-40 rounded-full object-cover mb-3 shadow-sm">
    <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
    <p class="text-blue-600 font-bold text-xl">${{ number_format($product->price, 2) }}</p>
    {{-- La disponibilité devrait aussi être dynamique, par exemple avec un champ 'stock' sur le produit --}}
    <p class="text-gray-500 text-sm">18 Pan Available</p>
</div>
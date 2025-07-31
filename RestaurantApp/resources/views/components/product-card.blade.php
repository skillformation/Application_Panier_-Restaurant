<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow-md p-4 flex flex-col text-center']) }}>
    <div class="flex-grow">
        <img src="https://placehold.co/150x150/f0f0f0/666666?text=Pizza" alt="Pizza {{ $product->name }}" class="w-40 h-40 rounded-full object-cover mb-3 shadow-sm mx-auto">
        <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
        <p class="text-gray-500 text-xs mb-2">{{ Str::limit($product->description ?? 'Délicieuse pizza.', 40) }}</p>
        <p class="text-blue-600 font-bold text-xl mb-4">{{ number_format($product->price, 2, ',', ' ') }} €</p>
    </div>
    <button class="add-to-cart-btn mt-auto w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 transition-colors duration-200 button-animation" data-product-id="{{ $product->id }}">
        Ajouter au panier
    </button>
</div>
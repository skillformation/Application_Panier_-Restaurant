@props(['product']);
<div>
        <!-- Élément de pizza 1 -->
                <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center text-center hover:shadow-xl transition-shadow duration-200 cursor-pointer">
                    <img src="https://placehold.co/150x150/f0f0f0/666666?text=Pizza" alt="Pizza American Favorite" class="w-40 h-40 rounded-full object-cover mb-3 shadow-sm">
                    <h3 class="text-lg font-semibold">{{$product->name}}</h3>
                    <p class="text-blue-600 font-bold text-xl">{{$product->price }}</p>
                    <p class="text-gray-500 text-sm">18 Pan Available</p>
                </div>
</div>
@props(['categories'])
<div>
     <button class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-xl shadow-md flex-shrink-0 button-animation">
        <img src="https://placehold.co/20x20/ffffff/000000?text=P" alt="Icône Pizza" class="w-5 h-5 mr-2 opacity-0">
        {{ $categories->name }}
    </button>
</div>
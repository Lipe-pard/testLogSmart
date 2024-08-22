<x-guest-layout>
    <div class="p-6 flex justify-between space-x-10 w-full">
        <a href="{{route("friends.create")}}">
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-user-plus"></i></button>
        </a>

        <div class="w-1/3 flex space-x-2 justify-end">
            <input type="text" class="w-1/2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Pesquisar">
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Pesquisar</button>
        </div>
    </div>
    <div class="flex-1 w-full flex justify-center items-center">
        @if (isset($users))

        @else
            <h1 class="text-center text-7xl font-bold text-gray-300">Nenhum amigo registrado</h1>
        @endif
    </div>
</x-guest-layout>

<x-guest-layout>
    <div class="flex-1 w-full flex justify-center items-center">
        <div class="w-1/3 bg-gray-100 p-4 h-auto">
            <div>
                <p class="font-bold text-2xl text-indigo-500">Cadastra um amigo</p>
            </div>
            <form class="space-y-4 mt-4">
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" label="Nome"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" label="Email"/>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Cadastrar</button>
            </form>
        </div>
    </div>
</x-guest-layout>

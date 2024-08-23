<x-guest-layout>

    <a href="{{route("welcome")}}">
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded absolute top-5 left-5"><i class="fa-solid fa-arrow-left"></i></button>
    </a>

    <x-mensage />

    <div class="flex-1 w-full flex justify-center items-center">
        <div class="w-1/3 bg-white shadow-md rounded p-4 h-auto">
            <div class="border-l-4 border-indigo-500 p-4">
                <p class="font-bold text-2xl text-indigo-500">Editar amigo</p>
            </div>
            <form class="space-y-4 mt-4" method="POST" action="{{ route('friends.update', $friend) }}">
                @csrf
                @method('PUT')
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name', $friend->name)}}" required autofocus autocomplete="name" label="Nome"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email', $friend->email)}}" required autocomplete="username" label="Email"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Editar</button>
            </form>
        </div>
    </div>
</x-guest-layout>

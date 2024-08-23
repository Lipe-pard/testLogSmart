<x-guest-layout>
    <a href="{{route("welcome")}}">
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded absolute top-5 left-5"><i class="fa-solid fa-arrow-left"></i></button>
    </a>
    <x-mensage />
    <div class="w-1/3 bg-white shadow-md rounded p-4 h-auto">
        <div class="border-l-4 border-indigo-500 p-4">
            <p class="font-bold text-2xl text-indigo-500">Resultado do Sorteio</p>
        </div>
    @foreach ($secretFriends as $secretFriend)
        <div class="flex justify-between space-x-4 my-4 border border-indigo-600 p-4 rounded">
            <div class="flex">
                <span>🎅</span>
                <p>{{$secretFriend->gifs_id}}</p>
            </div>
            <i class="fa-solid fa-arrow-right text-indigo-600"></i>
            <div class="flex">
                <span>🎁</span>
                <p>{{$secretFriend->recivers_id}}</p>
            </div>
        </div>
    @endforeach
    </div>
</x-guest-layout>

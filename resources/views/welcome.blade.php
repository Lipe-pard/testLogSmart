<x-guest-layout>
    <div class="p-6 flex justify-between space-x-10 w-full">
        <a href="{{route("friends.create")}}">
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-user-plus"></i></button>
        </a>

        

        <div class="w-1/3 flex space-x-2 justify-end items-center">
            <div class="relative w-1/2">
                <i class="fa-solid fa-x text-gray-300 absolute top-1/2 right-2 transform -translate-y-1/2 cursor-pointer text-sm hidden" id="clear"></i>
                <input
                type="text"
                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                placeholder="Pesquisar"
                id="search"
                />
            </div>
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded" id="btnSearch">Pesquisar</button>
        </div>
    </div>

    <x-mensage />

    <div class="flex-1 w-full flex justify-center items-center">
        @if (isset($friends))
            <table class="w-1/2 bg-white shadow-md rounded h-auto">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="text-left p-2">Nome</th>
                        <th class="text-left">Email</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($friends as $friend)
                            <tr class="border-b">
                                <td class="text-left p-2 name cursor-pointer hover:text-indigo-600 hover:underline" data-url="{{route("friends.edit", $friend->id)}}">{{$friend->name}}</td>
                                <td class="text-left">{{$friend->email}}</td>
                                <td class="text-center">
                                    <a data-modal-target="default-modal-delete-{{$friend->id}}" data-modal-toggle="default-modal-delete-{{$friend->id}}" class="cursor-pointer">
                                        <i class="fa-solid fa-trash text-red-600 hover:text-red-800"></i>
                                    </a>
                                </td>
                                <x-modal-delete id="{{$friend->id}}" name="{{$friend->name}}" />
                            </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h1 class="text-center text-7xl font-bold text-gray-300">Nenhum amigo registrado</h1>
        @endif
    </div>

    @push('script')
        <script>
            document.querySelectorAll('table tbody tr .name').forEach((tr) => {
                tr.addEventListener('click', () => {
                    window.location.href = tr.dataset.url
                })
            })
        </script>
        <script src="{{ asset('js/search.js') }}"></script>
    @endpush

</x-guest-layout>

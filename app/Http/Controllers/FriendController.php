<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\SecretFriend;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FriendController extends Controller
{
    public function create()
    {
        return view('friends.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:friends'],
        ],
        [
            'email.unique' => 'Esse email ja existe, tente outro',
            'email.required' => 'Por favor, insira um email',
            'name.required' => 'Por favor, insira um nome',
            'name.string' => 'Por favor, insira um nome valido',
            'email.email' => 'Por favor, insira um email valido',
            'email.max' => 'Por favor, insira um email com no maximo :max caracteres',
            'name.max' => 'Por favor, insira um nome com no maximo :max caracteres',
        ]);

        $friend = Friend::create($data);

        if(!$friend) {
            return redirect()->back()->with('error', 'Algo deu errado');
        }

        return redirect()->route('welcome')->with('success', 'Amigo criado com sucesso');
    }

    public function edit(Friend $friend){
        return view('friends.edit', compact('friend'));
    }

    public function update(Request $request, Friend $friend){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255',
            Rule::unique('friends')->ignore($friend->id),
        ],
        ],
        [
            'email.unique' => 'Esse email ja existe, tente outro',
            'email.required' => 'Por favor, insira um email',
            'name.required' => 'Por favor, insira um nome',
            'name.string' => 'Por favor, insira um nome valido',
            'email.email' => 'Por favor, insira um email valido',
            'email.max' => 'Por favor, insira um email com no maximo :max caracteres',
            'name.max' => 'Por favor, insira um nome com no maximo :max caracteres',
        ]);

        $friend->update($data);

        if(!$friend) {
            return redirect()->back()->with('error', 'Algo deu errado');
        }

        return redirect()->route('welcome')->with('success', 'Amigo atualizado com sucesso');
    }

    public function destroy($id){
        $friend = Friend::find($id);
        $friend->delete();
        if(!$friend) {
            return redirect()->back()->with('error', 'Algo deu errado');
        }
        return redirect()->route('welcome')->with('success', 'Amigo deletado com sucesso');
    }

    public function search(Request $request){
        $friends = Friend::where('name', 'like', '%' . $request->search . '%')
        ->orWhere('email', 'like', '%' . $request->search . '%')
        ->get();

        return response()->json($friends);
    }

    public function randomFriends(){
        $friends = Friend::all()->pluck('id')->toArray();

        if (count($friends) < 2) {
            return redirect()->back()->with('error', 'Necessário pelo menos 2 amigos para sortear');
        }

        $gifs = $friends;

        do {
            shuffle($gifs);
            $valid = true;

            foreach ($friends as $index => $friend) {
                if ($friend == $gifs[$index]) {
                    $valid = false;
                    break;
                }
            }
        } while (!$valid);

        SecretFriend::truncate();

        foreach ($friends as $index => $friend) {
            SecretFriend::create([
                'recivers_id' => $friend,
                'gifs_id' => $gifs[$index],
            ]);
        }

        $secretFriends = SecretFriend::all();

        foreach ($secretFriends as $secretFriend) {
            $secretFriend->recivers_id = Friend::find($secretFriend->recivers_id)->name;
            $secretFriend->gifs_id = Friend::find($secretFriend->gifs_id)->name;
        }

        return view('friends.secret-friends', compact('secretFriends'));
    }

    public function resultSecretFriends(){
        $secretFriends = SecretFriend::all();

        foreach ($secretFriends as $secretFriend) {
            $secretFriend->recivers_id = Friend::find($secretFriend->recivers_id)->name;
            $secretFriend->gifs_id = Friend::find($secretFriend->gifs_id)->name;
        }

        return view('friends.secret-friends', compact('secretFriends'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::get();
        return view('game.index', ['games' => $games]);
    }

    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $validategame = $request->validate([
            'nama' => 'required|min:3',
            'dev' => 'required|min:3',
            'genre' => 'required',
        ]);
        $buku = $request->validate([
            'publisher' => 'required|min:3',
            'platform' => 'required',
            'rating' => 'required|numeric'
        ]);

        $game = Game::create($validategame);
        $game->datagame()->create($buku);
        return redirect()->route('game.index')->with('message', "Data game {$validategame['nama']} berhasil ditambahkan");
    }

    public function destroy(game $game)
    {
        $game->datagame()->delete($game->id);
        $game->delete($game->id);
        return redirect()->route('game.index')->with('message', "Data game $game->nama berhasil dihapus");
    }

    public function edit(game $game)
    {
        return view('game.edit', ['game' => $game]);
    }

    public function update(Request $request, game $game)
    {
        $validategame = $request->validate([
            'nama' => 'required|min:3',
            'dev' => 'required|min:3',
            'genre' => 'required',
        ]);

        $buku = $request->validate([
            'publisher' => 'required|min:3',
            'platform' => 'required',
            'rating' => 'required|numeric'
        ]);

        $game1 = Game::find($game->id);
        $game1->update($validategame);
        $game1->datagame()->update($buku);

        return redirect()->route('game.index')->with('message', "Data game $game->nama berhasil diubah");
    }
}

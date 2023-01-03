<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => ['required', 'min:3', 'max:255', 'unique:animes'],
            'status' => 'required',
            'tanggal_tayang' => 'required',
            'studio' => 'required',
            'musim' => 'required',
            'genre' => 'required',
            'jumlah_tayang' => 'required',
            'tipe_anime' => 'required',
            'rating' => 'required',
            'jumlah_episode' => 'required',
            'sinopsis' => 'required',
            'link_anime_list' => 'required',
            'link_lagu' => 'required',
            'link_lagu_2' => 'required',
            'link_nonton_1' => 'required',
            'link_nonton_2' => 'required',
            'link_nonton_3' => 'required',
            'link_nonton_4' => 'required',
            'link_nonton_5' => 'required',
            'link_nonton_6' => 'required',
            'link_nonton_7' => 'required',
            'link_nonton_8' => 'required',
            'image' => 'image|file|max:10000',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('animes_image');
        }

    // dd($validatedData);
        Anime::create($validatedData);
        // dd('sukses');

        return redirect('/dashboard-admin')->with('success', 'Anime telah ditambahkan');
    }
}

<?php

namespace App\Http\Controllers;

use App\Pilihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PilihanController extends Controller
{

    public function index()
    {
        $data= DB::table('pilihans')->paginate(3);

        return view('home',['pilihans' => $data]);
    }

    public function create()
    {
        return view('barista.buat');
    }

    public function store(Request $request)
    {
        $gambar = $request->file('gambar');

        $fileName = $gambar->getClientOriginalName();

        $gambar->move('images', $fileName );

        DB::table('pilihans')->insert([
            'namaKopi' => $request->namaKopi,
            'gambar' => $fileName,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect()->route('home');

    }

    public function show(pilihan $pilihan)
    {
        //
    }

    public function edit(pilihan $pilihan, $id)
    {
        $edit = DB::table('pilihans')->where('id',$id)->first();

        return view('barista.edit', ['pilihans' => $edit]);
    }

    public function update(Request $request, $id)
    {
        $gambar = $request->file('gambar');

        if ($request->file('gambar')) {
            
        $fileName = $gambar->getClientOriginalName();

        $gambar->move('images', $fileName );
        
        DB::table('pilihans')->where('id', $id)->update([
            'namaKopi' => $request->namaKopi,
            'gambar' => $fileName,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            ]);

        } else {
            
        DB::table('pilihans')->where('id', $id)->update([
            'namaKopi' => $request->namaKopi,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            ]);
        
    }

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        DB::table('pilihans')->where('id', $id)->delete();
    
        return redirect()->back();

    }
}

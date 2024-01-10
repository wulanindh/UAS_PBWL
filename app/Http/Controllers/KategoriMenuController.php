<?php

namespace App\Http\Controllers;

use App\Models\DaftarMenu;
use App\Models\KategoriMenu;
use Illuminate\Http\Request;

class KategoriMenuController extends Controller
{
public function index()
        {
            //
            $rows = KategoriMenu::all();
            return view('kategori.index',compact('rows'));
        }
        public function create()
    {
        return view('kategori.create');
    } 
    public function store(Request $request)
   {
          KategoriMenu::create([
            'kat_id' => $request->kat_id,
            'jenis' => $request->jenis,
            'kategori'=> $request->kategori
        ]);
        return redirect('kategori');
    }

    public function show(string $id)
    {
        $row = KategoriMenu::findOrFail($id);

        //render view with post
        return view('kategori.show', compact('row'));
    }
 
    public function edit(string $id)
    {
        $row = KategoriMenu::find($id);
        return view('kategori.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = KategoriMenu::findOrFail($id);

        $row->update([
            'jenis' => $request->jenis,
            'kategori' => $request->kategori
        ]);

        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = DaftarMenu::findOrFail($id);

        $row->delete();

        return redirect('kategori');
    }
}
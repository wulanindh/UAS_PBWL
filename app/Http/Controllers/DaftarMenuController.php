<?php

namespace App\Http\Controllers;

use App\Models\DaftarMenu;
use App\Models\KategoriMenu;
use Illuminate\Http\Request;

class DaftarMenuController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            //
            $rows = DaftarMenu::all();
            return view('menu.index',compact('rows'));
        }
        public function create()
    {
        $kategori = KategoriMenu::all();
        return view('menu.create', compact('kategori'));
    } 
    public function store(Request $request)
   {
          DaftarMenu::create([
            'menu_id' => $request->menu_id,
            'foto' => 'required|foto|mimes:jpeg,jpg,png|max:2048',
            'nama_menu' => $request->nama_menu,
            'keterangan'=> $request->keterangan,
            'jenis'=> $request->jenis,
            'kategori'=> $request->kategori,
            'harga'=> $request->harga,
            'stok'=> $request->stok,
        ]);
        return redirect('menu');
    }

    public function show(string $id)
    {
        $row = DaftarMenu::findOrFail($id);
        
        //render view with post
        return view('menu.show', compact('row'));
    }
 
    public function edit(string $id)
    {
        $row = DaftarMenu::find($id);
        $kategori = KategoriMenu::all();
        return view('menu.edit', compact('row'), compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = DaftarMenu::findOrFail($id);
        $row->update([
            'nama_menu' => $request->nama_menu
        ]);

        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = DaftarMenu::findOrFail($id);

        $row->delete();

        return redirect('menu');
    }
}

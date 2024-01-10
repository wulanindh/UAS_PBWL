<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
        {
            //
            $rows = Order::all();
            return view('order.index',compact('rows'));
        }
    
        public function create()
    {
        return view('order.create');
    } 
    public function store(Request $request)
   {
          Order::create([
            'order_id' => $request->order_id,
           'kode_order'=>$request->kode_order,
           'pelanggan'=>$request->pelanggan,
           'pelayan'=>$request->pelayan,
           'meja'=>$request->meja,
           'status'=>$request->status,
           'waktu_order'=>$request->waktu_order,
        ]);
        return redirect('order');
    }

    public function show(string $id)
    {
        $row = Order::findOrFail($id);

        //render view with post
        return view('order.show', compact('row'));
    }
 
    public function edit(string $id)
    {
        $row = Order::find($id);
        return view('order.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Order::findOrFail($id);

        $row->update([
            'order_id' => $request->order_id,
            'keterangan'=> $request->keterangan,
            'kategori'=> $request->kategori,
            'harga'=> $request->harga,
            'stok'=> $request->stok
        ]);

        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Order::findOrFail($id);

        $row->delete();

        return redirect('order');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ListOrder;
use App\Models\DaftarMenu;
use App\Models\Order;
use App\Models\Bayar;
use Illuminate\Http\Request;

class ListOrderController extends Controller
{
    public function index()
        {
            //
            $rows = ListOrder::all();
            $menu = DaftarMenu::all();
            $order= Order::all();
            return view('list.index',compact(['rows', 'menu', 'order']));
        }
        public function dapur()
        {
            $rows = ListOrder::all();
            $menu = DaftarMenu::all();
            $order= Order::all();
            return view('list.dapur',compact(['rows', 'menu', 'order']));
        }
        public function report()
        {
            $rows = ListOrder::all();
            $menu = DaftarMenu::all();
            $order= Order::all();
            $bayar= Bayar::all();
            return view('report.index',compact(['rows', 'menu', 'order','bayar']));
        }
        public function create()
    {
        $order = Order::all();
        $menu = DaftarMenu::all();
        return view('list.create', compact('order'), compact('menu'));
    } 
    public function store(Request $request)
   {
          ListOrder::create([
            'list_order_id' => $request->order_id,
            'kode_order' => $request->kode_order,
            'waktu_order'=> $request->waktu_order,
            'menu'=> $request->menu,
            'jumlah'=> $request->jumlah,
            'catatan'=> $request->catatan,
            'status'=> $request->status

        ]);
        return redirect('list');
    }

    public function show(string $id)
    {
        $row = ListOrder::findOrFail($id);
        $menu = DaftarMenu::findOrfail();
        //render view with post
        return view('list.show', compact('row'));
    }
 
    public function edit(string $id)
    {
        $row = ListOrder::find($id);
        return view('list.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = ListOrder::findOrFail($id);

        $row->update([
            'list_order_id' => $request->order_id,
            'kode_order' => $request->kode_order,
            'waktu_order'=> $request->waktu_order,
            'menu'=> $request->menu,
            'jumlah'=> $request->jumlah,
            'catatan'=> $request->catatan,
            'status'=> $request->status
        ]);

        return redirect('list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = ListOrder::findOrFail($id);

        $row->delete();

        return redirect('list');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\DaftarMenu;
use App\Models\ListOrder;
use App\Models\Bayar;
use Illuminate\Http\Request;

class BayarController extends Controller
{
    public function index()
    {
        //
        $rows = Bayar::all();
        $list = ListOrder::all();
        $menu = DaftarMenu::all();
        return view('bayar.index',compact(['rows', 'menu', 'list']));
    }
}

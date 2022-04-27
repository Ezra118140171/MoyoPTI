<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index()
    {
        $Menus = DB::select('select * from Menu');
        return view('Menu.index',);

    }
    public function store(Request $request)
    {
        $Menu = new Menu;
        $Menu->menuname = $request->menuname;
        $Menu->price = $request->price;
        $Menu->image = $request->image;
        $Menu->save();
        return redirect('/menu')->with('status', 'Data Has Been inserted');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('kategori.index');
    }

    public function detail($id)
    {
        $data = DB::table('artikels')->select('*')->where('id', $id)->get();
        DB::table('artikels')->where('id', $data[0]->id)->update(['views' => $data[0]->views + 1]);
        return view('single_post', ['artikel' => $data]);
    }
}

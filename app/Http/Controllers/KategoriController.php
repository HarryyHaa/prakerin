<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Session;
use Yajra\DataTables\DataTables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if($request->ajax()) {
            $kategori = Kategori::get();
            return Datatables::of($kategori)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '';

                    $btn = '<a href="/admin/kategori/'.$row->id.'/edit" class="btn btn-outline-info">Edit</a>';
                    $btn = $btn . ' <a href="/admin/kategori/'.$row->id.'" class="btn btn-outline-success">Show</a>';
                    $btn = $btn .' <a href="#" class="btn btn-outline-danger" id="hapus-data" data-id="'.$row->id.'">Hapus</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategori.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new Kategori;
        $kategori->nama = $request->get('nama');
        $kategori->slug = str_slug($request->nama);
        $kategori->save();
        Session::flash("flash_notification",
        [
            "level" => "success",
            "massage"=> "Berhasil menyimpan <b>$kategori->nama</b>"
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::findOrfail($id);
        return view('backend.kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('backend.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->nama = $request->get('nama');
        $kategori->slug = str_slug($request->nama);
        $kategori->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "massage"=> "Berhasil menyimpan <b>$kategori->nama</b>"
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::findOrFail($id)->delete();
        Session::flash("flash_notification",[
            "level" => "success",
            "massage"=> "Data berhasil di hapus"
        ]);
        return redirect()->route('kategori.index');
    }
}

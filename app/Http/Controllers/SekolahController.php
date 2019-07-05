<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skul;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skul = skul::all();
        $response = [
            'success' => true,
            'data' => $skul,
            'message' => 'berhasil'
        ];
        return response()->json($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skul = new skul();
        $skul ->nm_guru = $request->nm_guru;
        $skul ->matapelajaran = $request->matapelajaran;
        $skul ->alamat = $request->alamat;
        $skul ->nm_sekolah = $request->nm_sekolah;
        $skul->save();
        $response = [
            'success' => true,
            'data' => $skul,
            'message' => 'behasil'
        ];
        return response()->json($response,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skul = skul::findOrFail($id);
        $response = [
            'success' => true,
            'data' => $skul,
            'message' => 'berhasil'
        ];
        return response()->json($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $skul = new skul();
        $skul ->nm_guru = $request->nm_guru;
        $skul ->kelas = $request->kelas;
        $skul ->alamat = $request->alamat;
        $skul ->nm_sekolah = $request->nm_sekolah;

        $skul->save();
        $response = [
            'success' => true,
            'data' => $skul,
            'message' => 'behasil'
        ];
        return response()->json($response,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skul = skul::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $skul,
            'message' => 'behasil'
        ];
        return response()->json($response,200);
    }
}

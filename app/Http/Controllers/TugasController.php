<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dataTugas = tugas::all();
        $dataTugas = tugas::all();
        return view('admin.tugas.index', compact('dataTugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'action' => route('admin.store.tugas')
        ];

        $kategori = kategori::distinct()->get();
        return view('admin.tugas.create', $data, compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tugas::create($request->all());
        return redirect()->route('admin.index.tugas')->with('success', 'Data Tugas berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'tugas'  => tugas::find($id),
            'action' => route('admin.update.tugas', $id)
        ];

        $kategori = kategori::distinct()->get();
        return view('admin.tugas.form', $data, compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        tugas::where('id', $request->id)->update($request->only(['nama_tugas', 'kategori_id', 'status_tugas', 'ket_tugas']));
        return redirect()->route('admin.index.tugas')->with('success', 'Data Tugas berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tugas::where('id', $id)->delete();
        return redirect()->route('admin.index.tugas')->with('success', 'Data Tugas berhasil di hapus');
    }
}

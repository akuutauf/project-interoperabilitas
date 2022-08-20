<?php

namespace App\Http\Controllers;

use App\Models\tugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Admin;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function getData(){
        $tugas=DB::table('tugas')
        ->orderBy('id', 'desc')
        ->get();

        return response()->json($tugas, 200);
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dataTugas = tugas::all();
        $dataTugas = tugas::all();
        return view('admin.tugas', compact('dataTugas'));
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
        //
        $inputtugas = $request->validate([
            'id' => 'required',
            'kategori_id' => 'required',
            'nama_tugas' => 'required',
            'ket_tugas' => 'required',
            'status_tugas' => 'required',
        ]);

        $tugas= new tugas;
        $tugas->id = $request->id;
        $tugas->kategori_id =  $request->kategori_id;
        $tugas->nama_tugas = $request->nama_tugas;
        $tugas->ket_tugas = $request->ket_tugas;
        $tugas->status_tugas = $request->status_tugas;
        $tugas->save();
        return response()->json($tugas, 201);
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
        //
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
        //
        $updatedata = $request->validate([
            'id' => 'required',
            'kategori_id' => 'required',
            'nama_tugas' => 'required',
            'ket_tugas' => 'required',
            'status_tugas' => 'required',
          ]);

            $tugas = tugas::where('id','=', $request->id)->first();
            $tugas->id = $request->id;
            $tugas->kategori_id =  $request->kategori_id;
            $tugas->nama_tugas = $request->nama_tugas;
            $tugas->ket_tugas = $request->ket_tugas;
            $tugas->status_tugas = $request->status_tugas;
            $tugas->save();

          return response()->json($tugas, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $hapustugas = tugas::where('id','=', $request->id)->first();

        if(!empty($hapustugas)){
         $hapustugas-> delete();

         return response()->json($hapustugas,201);
        }else{
         return response()->json([
             'error' => 'data tidak ditemukan',
         ], 404);
        }
    }
}

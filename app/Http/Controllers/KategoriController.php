<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kategori::all();
        return view('admin.kategori', compact('data'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

// //  method getData API
// public function getData($id = null)
// {
//     try {
//         $response['data'] = $id = null ? kategori::all() : kategori::find($id);
//         return $this->sendResponse($response, 'Data Berhasil diambil');
//     } catch (Exception $e) {
//         return $this->sendError($e->getMessage(), $e->getTrace(), 500);
//     }
// }

// // method storeData API
// public function storeData(Request $request)
// {
//     try {
//         $inputKategori = kategori::create([
//             // 'nama_kategori'->$request->nama_kategori,
//             // 'status_kategori'->$request->status_kategori,
//         ]);
//         $response['data'] = $inputKategori;
//         return $this->sendResponse($response, 'Berhasil menambahkan data kategori baru');
//     } catch (Exception $e) {
//         return $this->sendError($e->getMessage(), $e->getTrace(), 500);
//     }
// }

<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Admin;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{

    public function getData(){
        $kategori=DB::table('kategoris')
        ->orderBy('id', 'desc')
        ->get();

        return response()->json($kategori, 200);
     }

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
        $inputKategori = $request->validate([
            'id' => 'required',
            'nama_kategori' => 'required',
            'status_kategori' => 'required',
        ]);

        $kategori= new kategori;
        $kategori->id = $request->id;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->status_kategori = $request->status_kategori;
        $kategori->save();
        return response()->json($kategori, 201);
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
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request)
    {
        //
        $updatedata = $request->validate([
            'id' => 'required',
            'nama_kategori' => 'required',
            'status_kategori' => 'required',
          ]);

          $kategori = kategori::where('id','=', $request->id)->first();
          $kategori->id = $request->id;
          $kategori->nama_kategori = $request->nama_kategori;
          $kategori->status_kategori = $request->status_kategori;
          $kategori->save();

          return response()->json($kategori, 201);
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
        $hapuskategori = kategori::where('id','=', $request->id)->first();

       if(!empty($hapuskategori)){
        $hapuskategori-> delete();

        return response()->json($hapuskategori,201);
       }else{
        return response()->json([
            'error' => 'data tidak ditemukan',
        ], 404);
       }
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

<?php

namespace App\Http\Controllers\Admin;
use App\Models\Tugas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Admin;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    //
    public function getData(){
       $tugas=DB::table('tugas')
       ->orderBy('id', 'desc')
       ->get();

       return response()->json($tugas, 200);
    }

    public function store(Request $request){

            $inputTugas = $request->validate([
                'matkul' => 'required',
                'tugas' => 'required'
            ]);
            $tugas= new Tugas;
            $tugas->matkul = $request->matkul;
            $tugas->tugas = $request->tugas;
            $tugas->save();
            return response()->json($tugas, 201);
    }

    public function update(Tugas $tugas, Request $request){
      $updatedata = $request->validate([
        'matkul' => 'required',
        'tugas' => 'required'
      ]);

      $tugas = Tugas::where('matkul','=', $request->matkul)->first();
      $tugas->matkul = $request->matkul;
      $tugas->tugas = $request->tugas;
      $tugas->save();

      return response()->json($tugas, 201);

    }
    public function destroy(Request $request){
       $hapustugas = Tugas::where('matkul','=', $request->matkul)->first();

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

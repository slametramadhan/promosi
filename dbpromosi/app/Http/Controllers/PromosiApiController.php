<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promosi;

class PromosiApiController extends Controller
{
    public function index (){
        $promosis = Promosi::all();
        return response()->json(['message' => 'berhasil','data' => $promosis]);
    }

    public function abc (){
        $promosis = Promosi::orderBy('namap')->get();
        
        return response()->json(['message' => 'berhasil','data' => $promosis]);
    }

    public function untuk (){
        $promosis = Promosi::orderBy('untukp')->get();
        return response()->json(['message' => 'berhasil','data' => $promosis]);
    }

    public function jenis (){
        $promosis = Promosi::orderBy('jenisp')->get();
        return response()->json(['message' => 'berhasil','data' => $promosis]);
    }

    
    public function expired (){
        $promosis = Promosi::orderBy('akhirp','desc')->get();
        return response()->json(['message' => 'berhasil','data' => $promosis]);
    }

    public function show ($id){
        $promosis = Promosi::find($id);
        return response()->json(['message' => 'berhasil READ','data' => $promosis]);
    }

    public function store (Request $request){
        $promosis = Promosi::create($request->all());
        return response()->json(['message' => 'berhasil INSERT','data' => $promosis]);
    }

    public function update(Request $request,$id){
        $promosis = Promosi::find($id);
        $promosis->update($request->all());
        return response()->json(['message' => 'berhasil UPDATE','data' => $promosis]);
        
    }

    public function destroy($id){
        $product = Promosi::find($id);
        $product->delete();
        return response()->json(['message' => 'berhasil DELETE','data' => null]);
    }

}

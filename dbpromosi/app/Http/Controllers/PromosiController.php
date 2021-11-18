<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promosi;

class PromosiController extends Controller
{
    public function index() {
        $promosis = Promosi::all();
        return view('promosis.index',compact('promosis'));
    }

    public function create(){
        return view('promosis.create');
    }

    public function store(Request $request){
        promosi::create($request->all());
        return redirect('/promosis');
    }

    public function edit($id){
        $promosi = promosi::find($id);
        return view ('promosis.edit',compact('promosi'));
    }

    public function update(Request $request,$id){
        $promosi = promosi::find($id);
        $promosi->update($request->all());
        return redirect('/promosis');
    }

    
    public function destroy($id){
        $promosi = promosi::find($id);
        $promosi->delete();
        return redirect('/promosis');
    }
}

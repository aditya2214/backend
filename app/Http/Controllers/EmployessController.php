<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Employess;

class EmployessController extends Controller
{
    public function index(Request $request){
        $limit = $request->limit;
        return $employee=Employess::orderBy('nama','Asc')->paginate($limit);

        return ['success'=>true, 'data'=>$employee];
        
    }

    public function store(Request $request){
        
        $tambah = new Employess;
        $tambah->nama = $request->nama;
        $tambah->birthplace = $request->birthplace;
        $tambah->birthday = $request->birthday;
        $tambah->save();
        return ['success'=>true, 'data'=>$tambah];
        //return response()->json($peopleinfo);
    
            
    }

    public function update(Request $request,$id){
        $mahasiswa = Employess::findOrFail($id);
        $requestData=$request->all();
        $mahasiswa->update($requestData);
    }

    public function delete($id){
        $data=Employess::where('id',$id)->delete();

        return ['success'=>true, 'data'=>$data];
    }

}

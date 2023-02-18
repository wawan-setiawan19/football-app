<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KlubController extends Controller
{
    public function index(){
        return view('pages.input-klub',[
            "title"=>"FOOTBALL APP - DATA KLUB",
            "teams"=> DB::table('teams')->orderBy('nama_tim')->get(),
        ]);
    }

    public function add(Request $request){
        $messages = [
            'required' => ':attribute wajib diisi!!!',
        ];
        $this->validate($request,[
                'nama_tim' => 'required',
        ],$messages);
            $data = [
                'nama_tim'=>$request['nama_tim'],
                'created_at'=> now()->toDateTimeString()
            ];
            DB::table('teams')->insert($data);
            return redirect('/input-klub')->with('success', 'Berhasil tambah klub!');
    }

    public function update(Request $request,$id){
        $messages = [
            'required' => ':attribute wajib diisi!!!',
        ];
        $this->validate($request,[
                'nama_tim' => 'required',
        ],$messages);
            $data = [
                'nama_tim'=>$request['nama_tim'],
                'updated_at'=> now()->toDateTimeString()
            ];
        DB::table('teams')->where('id', $id)->update($data);
        return redirect('/input-klub')->with('success', 'Berhasil ubah klub!');
    }

    public function delete($id){
        DB::table('teams')->where('id', '=', $id)->delete();
        return redirect('/input-klub')->with('success', 'Berhasil hapus klub!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JamTangan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home(){
        return view("home", ["key" => "home"]);
    }

    public function catalog(){
        $watch = JamTangan::orderBy('id', 'desc')->get();
        return view("catalog", ["key" => "catalog", "wc" => $watch]);
    }

    public function formaddwatch(){
        return view("form-add", ["key" => "catalog"]);
    }

    public function savewatch(Request $request){
        $file_name = time().'-'.$request->file('model')->getClientOriginalName();
        $path = $request->file('model')->storeAs('model', $file_name, 'public');

        JamTangan::create([
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'warna' => $request->warna,
            'model' => $path
        ]);

        return redirect('/catalog')->with('alert', 'Data Berhasil Disimpan');
    }

    public function formeditwatch($id){
        $watch = JamTangan::find($id);
        return view("form-edit", ["key" => "catalog", "wc" => $watch]);
    }

    public function updatewatch($id, Request $request){
        $watch = JamTangan::find($id);
        $watch->merk = $request->merk;
        if($request->model){
            if($watch->model){
                Storage::disk("public")->delete($watch->model);
            }

            $file_name = time().'-'.$request->file('model')->getClientOriginalName();
            $path = $request->file('model')->storeAs('model', $file_name, 'public');
            $watch->model = $path;
        }
        $watch->tipe = $request->tipe;
        $watch->warna = $request->warna;
        $watch->save();
        
        return redirect('/catalog')->with('alert', 'Data Berhasil Diubah');
    }

    public function deletewatch($id){
        $watch = JamTangan::find($id);
        $watch->delete();
        if($watch->model){
            Storage::disk("public")->delete($watch->model);
        }
        $watch->delete();

        return redirect('/catalog')->with('alert', 'Data Berhasil Dihapus');
    }

    public function login(){
        return view("login");
    }

    public function formedituser(){
        return view("formedituser", ["key" => ""]);
    }

    public function updateuser(Request $request){
        if($request->password_baru == $request->konfirmasi_password){
            $user = Auth::user();
            $user->password = bcrypt($request->password_baru);
            $user->save();

            return redirect("/user")->with("info", "Password Berhasil Diubah");
        }else{
            return redirect("/user")->with("info", "Passwor Gagal Diubah");
        }
    }
}
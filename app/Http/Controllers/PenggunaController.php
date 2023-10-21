<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Dashboard",
            'data' => DB::table('pengguna')->get()
        ];
        return view("pengguna.index", $data);
    }
    public function form($id=null)
    {
        $data = [
            "title" => "Dashboard",
            'data' => DB::table('pengguna')->where('ID_Pengguna', base64_decode($id))->first()
        ];
        return view("pengguna.form", $data);
    }
    public function hapus($id=null)
    {
        DB::table('pengguna')->where('ID_Pengguna',base64_decode($id))->delete();
        return redirect('pengguna')->with('success', 'Berhasil menyimpan');

    }
    public function save(Request $request)
    {
        $id = $request->id;


        $validate = $request->validate([
            'email'      => ['required'],
            'username'      => ['required'],
        ]);
        if ($id) {
            if ($request->password) {
                $validate['password'] = Hash::make($request->password);
            }
            DB::table('pengguna')->where('id_pengguna', $id)->update($validate);
        } else {
            $validate['password'] = Hash::make($request->password);
            DB::table('pengguna')->insert($validate);
        }
        return redirect('pengguna')->with('success', 'Berhasil menyimpan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Data;

class AccountController extends Controller
{
    //
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/home');
        }
        return view('loginregist');
    }

    public function register(Request $request){
        $request -> validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,  
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/loginregister');
    }

    public function show() {
        $data = Data::all();

        return view('adminpage', ['data' => $data]); 
    }
    
    public function add(Request $request) {
        $request -> validate([
            'namadestinasi' => 'required|min:2',
            'pulau' => 'required|min:3',
            'lokasi' => 'required|min:3',
            'deskripsi' => 'required|min:5',
        ]);
        DB::table('destinasi')->insert([
            'namadestinasi' => $request->namadestinasi,
            'pulau' => $request->pulau,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/admin');
    }

    public function showUpdateData($id) {
        $edit = Data::findOrFail($id);
        return view('editpage', ['edit' => $edit]); 
    }

    public function update($id) {
        // $id -> validate([
        //     'id' => 'required',
        // ]);
        $edit = Data::findOrFail($id);
        $edit->update([
            'namadestinasi' => $edit->namadestinasi,
            'pulau' => $edit->pulau,
            'lokasi' => $edit->lokasi,
            'deskripsi' => $edit->deskripsi
        ]);
        return redirect('/admin');
    }
}

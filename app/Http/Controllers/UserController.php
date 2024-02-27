<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Karyawan;
use  Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  if(Auth()->user()->level !='Admin'){
        //     Auth::logout();
        //     return redirect('/login')->with('error','anda tidak memiliki akses');
       
        // }else{
        $user = User::all();
        return view('home.user.index', compact(['user']));
        //    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        return view('home.user.tambah', compact(['karyawan']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
      
        User::create([
            'id_karyawan'=> $request->id_karyawan,
            'nama_admin'=> $request->nama_admin,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            $request->except(['_token']),
        ]);
        return redirect('/user')->with('message','data telah tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::all();
        $user = User::find($id);
        return view('home.user.edit',compact(['user'],'karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
    
        $user = User::find($id);
        $user->update([
            'id_karyawan'=> $request->id_karyawan,
            'nama_admin'=> $request->nama_admin,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        $request->except(['_token']),
    ]);
    return redirect('/user')->with('update','data telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('delete','data telah dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin','verified']);
    }

    public function index()
    {
        $pegawais = User::role(['admin','pengawas','keuangan'])->get();

        return view('contents.pegawai.index', compact('pegawais'));

    }
    public function create()
    {
        $roles = Role::whereNotIn('name', ['customer'])->get();

        return view('contents.pegawai.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required|bail|min:2',
            'email'     => 'required|',
            'password'  => 'required',
            'jabatan'   => 'required',
            'roles'     => 'required|min:1',
        ]);

        $request->merge(['password' => bcrypt($request->get('password'))]);

        if($user = User::create($request->except('roles')))
        {
            $user->syncRoles($request->get('roles'));

            flash()->success('Petugas berhasil ditambahkan');
        }else{
            flash()->error('Petugas tidak dapat ditambahkan');
        }
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = [
            'pegawai'   => User::findOrFail($id),
            'roles'     => Role::pluck('name', 'id'),
        ];

        return view('contents.pegawai.edit', $data);
    }
    public function update(Request $request, $id)
    {
        if(auth()->user()->id == $id){
            flash('Peringatan ! Pembaruan pengguna yang saat ini masuk tidak diizinkan,
                   silahkan menggunakan fitur pengaturan.')->warning();
            return redirect()->back();
        }
        $user = User::findOrFail($id);
        $user->fill($request->except('roles','password'));
        if($request->get('password')){
            $user->password = bcrypt($request->get('password'));
        }
        $user->save();
        $user->syncRoles($request->get('roles'));
        flash()->success('Data penguna berhasil di perbaharui');
        return redirect()->back();
    }
}

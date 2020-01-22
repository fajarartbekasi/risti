<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function create()
    {
        $roles = Role::whereNotIn('name', ['admin','pengawas','keuangan'])->get();

        return view('auth.signup', compact('roles'));
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

            flash()->success('Terimakasih telah mendaftar selamat menikmati pelayan service kami');
        }else{
            flash()->error('Maaf sepertinya ada masalah, silahkan daftar kembali');
        }
        return redirect()->back();
    }
}

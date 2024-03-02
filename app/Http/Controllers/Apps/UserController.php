<?php

namespace App\Http\Controllers\Apps;

use Alert;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $data['users'] = user::orderBy('created_at', 'desc')->get();
        return view('pages.app.users.index', $data);
    }

    public function create()
    {
        return view('pages.app.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'role' => 'required',
            'password' => 'required',
        ],[
            'name.required' => 'Nama Lengkap Pengguna Harus Terisi',
            'username.unique' => 'Username Sudah Ada',
            'username.required' => 'Username Harus Terisi',
            'password.required' => 'Password Harus Terisi',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);

        $user->save();
        Alert::success('Berhasil!', 'User Telah Ditambah');
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $users = user::find($id);
        return view('pages.app.users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'username' => 'required',
            'password', 'status', 'bidang'
        ],[
            'name.required' => 'Nama Lengkap Pengguna Harus Terisi',
            'username.unique' => 'Username Sudah Ada',
            'username.required' => 'Username Harus Terisi',
        ]);

        $user = user::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->role = $request->role;

        if (!$request->password) {
            unset($request['password']);
        }else{
            $user->password = bcrypt($request->password);
        }

        $user->update();
        Alert::warning('Berhasil!', 'User Telah Diubah');
        return back();
    }

    public function destroy(User $user)
    {
        $user->delete();
        alert()->success('Berhasil!','Data Telah Dihapus');
        return redirect()->route('users.index');
    }
}

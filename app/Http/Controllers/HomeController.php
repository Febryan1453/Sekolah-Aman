<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\DataNik;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::count();
        $nik = DataNik::count();
        return view('admin.index', [
            'user' => $user,
            'nik' => $nik,
        ]);
    }

    public function userSistem()
    {
        $userSistem = User::all();
        $title = "Data User Sistem";
        return view('admin.user-sistem', [
            'userSistem' => $userSistem,
            'title' => $title,
        ]);
    }

    public function addUser(LoginRequest $request)
    {
        if ($request->password == '') {
            User::create([
                'name'          => $request->name,
                'email'         => $request->email,
                'role'          => "admin",
                'password'      => Hash::make('123456'),
            ]);
        } else {
            User::create([
                'name'          => $request->name,
                'email'         => $request->email,
                'role'          => "admin",
                'password'      =>  Hash::make($request->password),
            ]);
        }

        return redirect()->route('userSistem');
    }

    public function deleteUser($id)
    {
        $dataNik = User::findorFail($id);
        $dataNik->delete();
        return redirect()->back();
    }
}

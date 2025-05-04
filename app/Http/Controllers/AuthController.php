<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) { // jika sudah login, maka redirect ke halaman home
            return redirect('/');
        }
        return view('auth.login');
    }
    public function postlogin(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $credentials = $request->only('username', 'password');
            if (Auth::attempt($credentials)) {
                return response()->json([
                    'status' => true,
                    'message' => 'Login Berhasil',
                    'redirect' => url('/')
                ]);
            }
            return response()->json([
                'status' => false,
                'message' => 'Login Gagal'
            ]);
        }
        return redirect('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function register()
    {
        $levels = LevelModel::where('level_nama', '!=', 'Administrator')->get(); // ambil semua level yang bukan Administrator
        return view('auth.register', compact('levels'));
    }

    public function postregister(Request $request)
    {
        $adminLevelId = LevelModel::where('level_nama', 'Administrator')->value('level_id');

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:50|unique:m_user,username',
            'password' => 'required|string|min:6|confirmed',
            'level_id' => 'required|exists:m_level,level_id|not_in:' . $adminLevelId,
            'nama' => 'required|string|max:100',
        ], [
            'level_id.not_in' => 'Anda tidak bisa mendaftar sebagai Administrator',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi Gagal',
                'msgField' => $validator->errors()
            ], 422);
        }

        try {
            UserModel::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'level_id' => $request->level_id,
                'nama' => $request->nama,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Registrasi Berhasil',
                'redirect' => url('login')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Registrasi Gagal: ' . $e->getMessage(),
            ], 500);
        }
    }
}

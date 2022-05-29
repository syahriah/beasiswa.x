<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lolos;
use App\Models\User;
use App\Models\pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function loginpost(Request $request)
    {
        if (Auth::attempt(['kamar' => $request->kamar, 'password' => $request->password])) {
            return redirect('/');
        } else {
            return redirect()->back()->with('pesan', 'Username atau password salah');
        }
    }
    public function register()
    {
        return view('register');
    }
    public function registerpost(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/login')->with('daftar', 'Berhasil mendaftarkan akun silakan login');
    }

    public function index()
    {
        $Lolos = Lolos::all()->count();
        $rank = pendaftar::all()->count();
        $comment = comment::all()->count();
        $pendaftar = pendaftar::all()->pluck('jumlah_keluarga');

        $total = 0;
        foreach ($pendaftar as $rd) {
            $total += $rd;
        }

        $data = Lolos::all();
        return view('home', compact('data', 'rank', 'lolos', 'total'));
    }

    public function index2()
    {
        $data = pendaftar::all();
        return view('pendaftar', compact('data'));
    }
    public function detailpendaftar($id)
    {
        $data = pendaftar::where('id', $id)->first();
        return view('detailpendaftar', compact('data'));
    }
    public function editpendaftar($id)
    {
        $data = pendaftar::where('id', $id)->first();
        return view('editpendaftar', compact('data'));
    }
    public function hapuspendaftar($id)
    {
        pendaftar::where('id', $id)->delete();
        return redirect()->back();
    }
    public function insert(request $request)
    {
        pendaftar::create([
            'rank' => $request->rank,
            "nama" => $request->nama,
            "nomorhp" => $request->nomorhp,
            "jumlah_keluarga" => $request->jumlah_keluarga,
            "foto" => $request->file('foto')->getClientOriginalName(),
        ]);

        User::create([
            'name' => $request->nama,
            'kamar' => $request->rank,
            'password' => bcrypt($request->password),
        ]);

        $request->file('foto')->storeAs('public/foto', $request->file('foto')->getClientOriginalName());
        return redirect('/pendaftar');
    }
    public function update(Request $request)
    {
        if ($request->foto) {
            pendaftar::where('id', $request->id)->update([
                'rank' => $request->rank,
                "nama" => $request->nama,
                "nomorhp" => $request->nomorhp,
                "jumlah_keluarga" => $request->jumlah_keluarga,
                "foto" => $request->file('foto')->getClientOriginalName(),
            ]);
            $request->file('foto')->storeAs('public/foto', $request->file('foto')->getClientOriginalName());
        } else {
            pendaftar::where('id', $request->id)->update([
                'rank' => $request->rank,
                "nama" => $request->nama,
                "nomorhp" => $request->nomorhp,
                "jumlah_keluarga" => $request->jumlah_keluarga,
            ]);
        }
        return redirect('/pendaftar');
    }


    public function index3()
    {
        return view('datapendaftar');
    }


    public function index5()
    {
        $data = Lolos::all();
        return view('Lolos', compact('data'));
    }

}

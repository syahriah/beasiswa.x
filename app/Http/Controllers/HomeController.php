<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Maintenance;
use App\Models\User;
use App\Models\resident;
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
        $maintenance = Maintenance::all()->count();
        $rooms = resident::all()->count();
        $comment = comment::all()->count();
        $resident = resident::all()->pluck('jumlah_keluarga');

        $total = 0;
        foreach ($resident as $rd) {
            $total += $rd;
        }

        $data = Maintenance::all();
        return view('home', compact('data', 'rooms', 'maintenance', 'comment', 'total'));
    }

    public function index2()
    {
        $data = resident::all();
        return view('resident', compact('data'));
    }
    public function detailresident($id)
    {
        $data = resident::where('id', $id)->first();
        return view('detailresident', compact('data'));
    }
    public function editresident($id)
    {
        $data = resident::where('id', $id)->first();
        return view('editresident', compact('data'));
    }
    public function hapusresident($id)
    {
        resident::where('id', $id)->delete();
        return redirect()->back();
    }
    public function insert(request $request)
    {
        resident::create([
            'rooms' => $request->rooms,
            "nama" => $request->nama,
            "nomorhp" => $request->nomorhp,
            "jumlah_keluarga" => $request->jumlah_keluarga,
            "foto" => $request->file('foto')->getClientOriginalName(),
        ]);

        User::create([
            'name' => $request->nama,
            'kamar' => $request->rooms,
            'password' => bcrypt($request->password),
        ]);

        $request->file('foto')->storeAs('public/foto', $request->file('foto')->getClientOriginalName());
        return redirect('/resident');
    }
    public function update(Request $request)
    {
        if ($request->foto) {
            resident::where('id', $request->id)->update([
                'rooms' => $request->rooms,
                "nama" => $request->nama,
                "nomorhp" => $request->nomorhp,
                "jumlah_keluarga" => $request->jumlah_keluarga,
                "foto" => $request->file('foto')->getClientOriginalName(),
            ]);
            $request->file('foto')->storeAs('public/foto', $request->file('foto')->getClientOriginalName());
        } else {
            resident::where('id', $request->id)->update([
                'rooms' => $request->rooms,
                "nama" => $request->nama,
                "nomorhp" => $request->nomorhp,
                "jumlah_keluarga" => $request->jumlah_keluarga,
            ]);
        }
        return redirect('/resident');
    }


    public function index3()
    {
        return view('dataresident');
    }


    public function index4()
    {
        $floor1 = DB::select("select rooms from resident where rooms like '01%'");
        $floor2 = DB::select("select rooms from resident where rooms like '02%'");
        $floor3 = DB::select("select rooms from resident where rooms like '03%'");
        $data = resident::all();
        return view('rooms', compact('floor1', 'floor2', 'floor3', 'data'));
    }


    public function index5()
    {
        $data = Maintenance::all();
        return view('maintenance', compact('data'));
    }


    public function index6()
    {
        $data = Comment::all();
        return view('comment', compact('data'));
    }


    public function index7()
    {
        return view('website');
    }
    public function komentar(Request $request)
    {
        Comment::create([
            'rooms' => Auth::user()->kamar,
            'comment' => $request->comment
        ]);
        return redirect('/website');
    }
    public function hapuskomen($id)
    {
        Comment::where('id', $id)->delete();
        return redirect()->back();
    }




    public function maintenancepost(Request $request)
    {
        Maintenance::create([
            'room' => Auth::user()->kamar,
            'maintenance' => $request->maintenance,
            'date' => $request->date
        ]);
        return redirect()->back();
    }

    public function respon($id)
    {
        Maintenance::where('id', $id)->update(["status" => "Telah Direspon"]);
        return redirect()->back();
    }
    public function hapusmaintenance($id)
    {
        Maintenance::where('id', $id)->delete();
        return redirect()->back();
    }
}

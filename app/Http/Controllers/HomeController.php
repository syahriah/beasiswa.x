<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use App\Models\Status;
use App\Models\User;
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
        $jumlah = Pendaftar::all()->count();
        $lolos = 20;
        $tidak_lolos = $jumlah - $lolos;
        $status = Status::where("nama", "status")->pluck("value")->first();

        return view('home', compact('jumlah', 'lolos', 'tidak_lolos', "status"));
    }
    public function updateStatus()
    {
        Status::where("nama", "status")->first()
            ->update(["value" => "close"]);
        return back()->with("pesan", "Berhasil menutup pendaftaran");
    }

    public function index2()
    {
        $data = Pendaftar::all();
        return view('pendaftar', compact('data'));
    }

    public function index4()
    {
        $data = $this->rankSaw();
        return view('rank', compact('data'));
    }
    public function detailpendaftar(Pendaftar $pendaftar)
    {
        $data = $this->rankPendaftar($pendaftar->id);
        return view('detailpendaftar', compact('data'));
    }
    public function editpendaftar($id)
    {
        return view('editpendaftar', compact('data'));
    }
    public function hapuspendaftar(Pendaftar $pendaftar)
    {
        $pendaftar->delete();
        return redirect()->back()->with("pesan", "Behasil menghapus pendaftar");
    }
    public function insert(request $request)
    {
        User::create([
            'name' => $request->nama,
            'password' => bcrypt($request->password),
        ]);

        $request->file('foto')->storeAs('public/foto', $request->file('foto')->getClientOriginalName());
        return redirect('/pendaftar');
    }
    public function update(Request $request)
    {
        return redirect('/pendaftar');
    }


    public function index3()
    {
        return view('datapendaftar');
    }


    public function index5()
    {
        $data = $this->rankSaw();
        return view('Lolos', compact('data'));
    }

    public function index7()
    {
        $status = Status::where("nama", "status")->pluck("value")->first();
        $data = $this->rankSaw();
        return view('website', compact("status", "data"));
    }


    public function pendaftaran(Request $request)
    {
        $request->file('gambar')->storeAs('public/foto', $request->file('gambar')->getClientOriginalName());

        $request["foto"] = $request->file('gambar')->getClientOriginalName();


        Pendaftar::create($request->all());
        return back()->with("pesan", "Berhasil melakukan pendaftaran");
    }

    public function sawCount()
    {
        $mahasiswa = Pendaftar::all();
        $bobot_kriteria = [
            "akre_kampus" => 0.75,
            "akre_prodi" => 0.5,
            "ipk" => 1,
            "ukt" => 0.25,
            "gaji_ortu" => 0.75,
        ];
        $kriteria = [
            "akre_kampus" => [],
            "akre_prodi" => [],
            "ipk" => [],
            "ukt" => [],
            "gaji_ortu" => [],
        ];
        foreach ($mahasiswa as $mhs) {
            $nama[] = $mhs->nama;
            $kriteria["akre_kampus"][] = $mhs->akre_kampus;
            $kriteria["akre_prodi"][] = $mhs->akre_prodi;
            $kriteria["ipk"][] = $mhs->ipk;
            $kriteria["ukt"][] = $mhs->ukt;
            $kriteria["gaji_ortu"][] = $mhs->gaji_ortu;
        }

        $fuzzy_kriteria = [
            "akre_kampus" => [],
            "akre_prodi" => [],
            "ipk" => [],
            "ukt" => [],
            "gaji_ortu" => [],
        ];
        foreach ($kriteria["akre_kampus"] as $aptn) {
            $temp = null;
            switch ($aptn) {
                case 'C':
                    $temp = 0.6;
                    break;

                case 'B':
                    $temp = 0.8;
                    break;

                case 'A':
                    $temp = 1;
                    break;
            }
            $fuzzy_kriteria["akre_kampus"][] = $temp;
        }
        foreach ($kriteria["akre_prodi"] as $aprodi) {
            $temp = null;
            switch ($aprodi) {
                case 'C':
                    $temp = 0.55;
                    break;

                case 'B':
                    $temp = 0.75;
                    break;

                case 'A':
                    $temp = 1;
                    break;
            }
            $fuzzy_kriteria["akre_prodi"][] = $temp;
        }
        foreach ($kriteria["ipk"] as $ipk) {
            $temp = null;
            if ($ipk <= 3.5) {
                $temp = 0.1;
            } else if ($ipk > 3.5 and $ipk <= 3.6) {
                $temp = 0.2;
            } else if ($ipk > 3.6 and $ipk <= 3.7) {
                $temp = 0.4;
            } else if ($ipk > 3.7 and $ipk <= 3.8) {
                $temp = 0.6;
            } else if ($ipk > 3.8 and $ipk <= 3.9) {
                $temp = 0.8;
            } else if ($ipk > 3.9 and $ipk <= 4) {
                $temp = 1;
            }
            $fuzzy_kriteria["ipk"][] = $temp;
        }
        foreach ($kriteria["ukt"] as $ukt) {
            $temp = null;
            if ($ukt <= 2000000) {
                $temp = 0.1;
            } else if ($ukt > 2000000 and $ukt <= 3000000) {
                $temp = 0.2;
            } else if ($ukt > 3000000 and $ukt <= 4000000) {
                $temp = 0.4;
            } else if ($ukt > 4000000 and $ukt <= 5000000) {
                $temp = 0.6;
            } else if ($ukt > 5000000 and $ukt <= 6000000) {
                $temp = 0.8;
            } else if ($ukt > 6000000) {
                $temp = 1;
            }

            $fuzzy_kriteria["ukt"][] = $temp;
        }
        foreach ($kriteria["gaji_ortu"] as $pkerja) {
            $temp = null;
            switch ($pkerja) {
                case 'Rp 1.000.000 - Rp 2.000.000':
                    $temp = 0.2;
                    break;

                case 'Rp 2.000.000 - Rp 3.000.000':
                    $temp = 0.4;
                    break;

                case 'Rp 3.000.000 - Rp 4.000.000':
                    $temp = 0.6;
                    break;

                case 'Rp 4.000.000 - Rp 5.000.000':
                    $temp = 0.8;
                    break;

                case 'Rp 5.000.000 Keatas':
                    $temp = 1;
                    break;
            }
            $fuzzy_kriteria["gaji_ortu"][] = $temp;
        }

        $normalisasi_fuzzy = [
            "akre_kampus" => [],
            "akre_prodi" => [],
            "ipk" => [],
            "ukt" => [],
            "gaji_ortu" => [],
        ];
        foreach ($fuzzy_kriteria["akre_kampus"] as $faptn) {
            $temp = $faptn / max($fuzzy_kriteria["akre_kampus"]);
            $normalisasi_fuzzy["akre_kampus"][] = $temp;
        }
        foreach ($fuzzy_kriteria["akre_prodi"] as $faprodi) {
            $temp = $faprodi / max($fuzzy_kriteria["akre_prodi"]);
            $normalisasi_fuzzy["akre_prodi"][] = $temp;
        }
        foreach ($fuzzy_kriteria["ipk"] as $fipk) {
            $temp = $fipk / max($fuzzy_kriteria["ipk"]);
            $normalisasi_fuzzy["ipk"][] = $temp;
        }
        foreach ($fuzzy_kriteria["ukt"] as $fukt) {
            $temp = min($fuzzy_kriteria["ukt"]) / $fukt;
            // $temp = $fukt / max($fuzzy_kriteria["ukt"]);
            $normalisasi_fuzzy["ukt"][] = $temp;
        }
        foreach ($fuzzy_kriteria["gaji_ortu"] as $fpkerja) {
            $temp = min($fuzzy_kriteria["gaji_ortu"]) / $fpkerja;
            // $temp = $fpkerja / max($fuzzy_kriteria["gaji_ortu"]);
            $normalisasi_fuzzy["gaji_ortu"][] = $temp;
        }

        $nilai_preferensi = [];
        for ($i = 0; $i < count($nama); $i++) {
            $w1r1 = $normalisasi_fuzzy["akre_kampus"][$i] * $bobot_kriteria["akre_kampus"];
            $w2r2 = $normalisasi_fuzzy["akre_prodi"][$i] * $bobot_kriteria["akre_prodi"];
            $w3r3 = $normalisasi_fuzzy["ipk"][$i] * $bobot_kriteria["ipk"];
            $w4r4 = $normalisasi_fuzzy["ukt"][$i] * $bobot_kriteria["ukt"];
            $w5r5 = $normalisasi_fuzzy["gaji_ortu"][$i] * $bobot_kriteria["gaji_ortu"];
            $nilai_preferensi[] = [
                "mahasiswa" => $mahasiswa[$i],
                "normalisasi" => [
                    "akre_kampus" => $normalisasi_fuzzy["akre_kampus"][$i],
                    "akre_prodi" => $normalisasi_fuzzy["akre_prodi"][$i],
                    "ipk" => $normalisasi_fuzzy["ipk"][$i],
                    "ukt" => $normalisasi_fuzzy["ukt"][$i],
                    "gaji_ortu" => $normalisasi_fuzzy["gaji_ortu"][$i],
                ],
                "nilai" => round(($w1r1 + $w2r2 + $w3r3 + $w4r4 + $w5r5), 3),
            ];
        }

        return $nilai_preferensi;
    }

    public function rankSaw()
    {
        $data = $this->sawCount();
        usort($data, function ($a, $b) {
            return $a['nilai'] < $b['nilai'];
        });
        return $data;
    }

    public function rankPendaftar($id)
    {
        $data = $this->rankSaw();
        // return data user with rank
        $rank = null;
        $i = 1;
        foreach ($data as $key => $value) {
            if ($value['mahasiswa']['id'] == $id) {
                $rank = [
                    'rank' => $i,
                    'mahasiswa' => $value['mahasiswa'],
                    'nilai' => $value['nilai'],
                ];
            }
            $i++;
        }
        return $rank;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

Use App\MataKuliah;
use App\User;
use App\Mahasiswa;
use App\NilaiMahasiswaPerkuliahan;
use App\NilaiMahasiswaMbkm;
use App\Jurusan;

class NilaiMahasiswaPerkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexNilai(Request $request)
    {
        $jurusans = Jurusan::all();
        $dataMatakuliah = MataKuliah::with(['jurusan','semesters'])->when($request->jurusan_id, function ($query) use ($request) {
            return $query->where('jurusan_id', $request->jurusan_id);
        })->get();
    
        return view('pengurus.uploadnilai.index', compact('dataMatakuliah', 'jurusans'));
    }

    public function inputNilai(Request $request, $id)
    {
        $dataUsers = User::where('role', 'mahasiswa')->with('mahasiswa')->get();
        $jurusan_id = $request->jurusan_id; // Mendapatkan jurusan_id dari request
        $matkul_id = $id; // Ambil nilai matkul_id dari parameter
        return view('pengurus.uploadnilai.inputnilai', compact('dataUsers', 'jurusan_id', 'matkul_id'));
    }

    public function simpanNilai(Request $request)
    {
        $request->validate([
            'nilai.*' => 'required', // Validasi untuk semua nilai
            'matkul_id' => 'required',
        ]);
    
        $matkulId = $request->matkul_id;
    
        foreach ($request->nilai as $mahasiswaId => $nilai) {
            $mahasiswa = Mahasiswa::find($mahasiswaId);
        
            if ($mahasiswa) {
                $nilaiMahasiswa = new NilaiMahasiswaPerkuliahan();
                $nilaiMahasiswa->mahasiswa_id = $mahasiswa->id;
                $nilaiMahasiswa->matkul_id = $matkulId;
                $nilaiMahasiswa->nilai_kuliah = $nilai;
                $nilaiMahasiswa->save();
            }
        }
    
        return redirect()->route('inputNilai', ['id' => $matkulId])->with('success', 'Nilai berhasil disimpan');
    }

     public function editNilai($matkul_id)
    {
        $dataUsers = User::where('role', 'mahasiswa')->with('mahasiswa')->get();
    
        // Mengambil jurusan_id berdasarkan data yang ada pada tabel jurusan
        $jurusan = Jurusan::where('nama_jurusan', 'Nama Jurusan Yang Sesuai')->first();
    
        if ($jurusan) {
            $jurusan_id = $jurusan->id;
        } else {
            // Lakukan penanganan jika jurusan tidak ditemukan
            $jurusan_id = null; // Atau berikan nilai yang sesuai
        }
    
        return view('pengurus.uploadnilai.edit', compact('dataUsers', 'jurusan_id', 'matkul_id'));
    }
    
    public function updateNilai(Request $request)
    {
        $mahasiswa_id = $request->mahasiswa_id;
        $matkul_id = $request->matkul_id;
        $nilaiBaru = $request->nilai;
    
        // Temukan catatan berdasarkan ID
        $nilai = NilaiMahasiswaPerkuliahan::find($mahasiswa_id);
    
        if ($nilai) {
            $nilai->nilai_kuliah = $nilaiBaru;
            $nilai->save();
        }
    
        // Redirect atau kembali ke halaman yang sesuai
        return redirect()->back()->with('success', 'Nilai berhasil diperbarui.');
    }

    public function detailNilai($id)
    {
        $matkul = MataKuliah::findOrFail($id);
    
        $nilaiMahasiswa = NilaiMahasiswaPerkuliahan::with('mahasiswa')
            ->where('matkul_id', $id)
            ->get();

        $nilai_mbkm = NilaiMahasiswaMbkm::with('mahasiswa')->get();
        //d($nilai_mbkm);
    
        return view('pengurus.uploadnilai.detail', compact('matkul', 'nilaiMahasiswa', 'nilai_mbkm'));
    }

   public function konversiNilaiMatkul($matkulId)
    {
        // Ambil data mata kuliah berdasarkan ID
        $matkul = MataKuliah::findOrFail($matkulId);

        // Ambil semua mahasiswa
        $dataUsers = User::where('role', 'mahasiswa')->get();

        // Inisialisasi array untuk menyimpan nilai mahasiswa per mata kuliah
        $nilaiMahasiswa = [];

        // Iterasi untuk setiap mahasiswa
        foreach ($dataUsers as $user) {
            $mhs = Mahasiswa::where('user_id', $user->id)->first();

            // Pastikan bahwa user memiliki relasi dengan mahasiswa
            if ($mhs) {
                // Ambil nilai perkuliahan untuk mata kuliah tertentu
                $nilaiPerkuliahan = NilaiMahasiswaPerkuliahan::where('mahasiswa_id', $mhs->id)->where('matkul_id', $matkulId)->first();

                // Hitung nilai final (maksimum dari nilai perkuliahan dan nilai MBKM)
                $nilaiKuliah = $nilaiPerkuliahan ? $nilaiPerkuliahan->nilai_kuliah : 0;

                // Ambil nilai MBKM dari tabel nilai_mahasiswa_mbkm untuk mahasiswa ini
                $nilaiMbkm = NilaiMahasiswaMbkm::where('mahasiswa_id', $mhs->id)->first();
                if ($nilaiMbkm) {
                    $nilaiMbkm = $nilaiMbkm->nilai_mbkm;
                } else {
                    $nilaiMbkm = 0;
                }

                $nilaiFinal = max($nilaiKuliah, $nilaiMbkm);

                // Simpan data nilai mahasiswa per mata kuliah ke dalam array
                $nilaiMahasiswa[] = [
                    'mahasiswa' => $user->mahasiswa,
                    'nilaiKuliah' => $nilaiKuliah,
                    'nilaiMbkm' => $nilaiMbkm,
                    'nilaiFinal' => $nilaiFinal,
                ];
            }
        }

        return view('pengurus.uploadnilai.konversinilaimatkul', compact('matkul', 'nilaiMahasiswa'));
    }

  public function indexKonversi()
    {
        $dataMatakuliah = MataKuliah::all();
        $dataUsers = User::where('role', 'mahasiswa')->with('mahasiswa', 'nilaiMahasiswaPerkuliahan', 'nilaiMahasiswaMbkm')->get();
    
        $nilaiData = [];
    
        foreach ($dataUsers as $user) {
            $nilaiMahasiswa = [];
        
            foreach ($dataMatakuliah as $matakuliah) {
                $mhs = Mahasiswa::where('user_id', $user->id)->first();
            
                // Pastikan bahwa pengguna memiliki hubungan dengan Mahasiswa
                if ($mhs) {
                    $nilaiPerkuliahan = NilaiMahasiswaPerkuliahan::where('mahasiswa_id', $mhs->id)->where('matkul_id', $matakuliah->id)->first();
                
                    $nilaiKuliah = $nilaiPerkuliahan ? $nilaiPerkuliahan->nilai_kuliah : 0;
                
                    // Ambil nilaiMbkm untuk Mahasiswa ini
                    $nilaiMbkm = $mhs->nilaiMahasiswaMbkm ? $mhs->nilaiMahasiswaMbkm->nilai_mbkm : 0;
                
                    $nilaiFinal = max($nilaiKuliah, $nilaiMbkm);
                
                    $nilaiMahasiswa[] = [
                        'nilaiKuliah' => $nilaiKuliah,
                        'nilaiMbkm' => $nilaiMbkm,
                        'nilaiFinal' => $nilaiFinal,
                    ];
                }
            }
        
            $nilaiData[] = [
                'mahasiswa' => $user->mahasiswa,
                'nilaiMahasiswa' => $nilaiMahasiswa,
            ];
        }
    
        return view('pengurus.uploadnilai.indexkonversi', compact('nilaiData', 'dataMatakuliah'));
    }

    public function nilaiKonversi(Request $request)
    {
        $dataMatakuliah = MataKuliah::all();
        $dataUsers = User::where('role', 'mahasiswa')->get();

        foreach ($dataUsers as $user) {
            $mahasiswa = $user->mahasiswa;

            if ($mahasiswa && $mahasiswa->nilaiMahasiswaMbkm) {
                foreach ($dataMatakuliah as $matakuliah) {
                    $nilaiPerkuliahan = $mahasiswa->nilaiMahasiswaPerkuliahan->where('matkul_id', $matakuliah->id)->first();
                    if ($nilaiPerkuliahan) {
                        $nilaiKuliah = $nilaiPerkuliahan->nilai_kuliah;
                        $nilaiMbkm = $mahasiswa->nilaiMahasiswaMbkm->nilai_mbkm;
                        $nilaiFinal = max($nilaiKuliah, $nilaiMbkm);

                        $nilaiPerkuliahan->nilai_final_kuliah = $nilaiFinal;
                        $nilaiPerkuliahan->nilai_mahasiswa_mbkm_id = $mahasiswa->nilaiMahasiswaMbkm->id;
                        $nilaiPerkuliahan->save();
                    }
                }
            }
        }

        return redirect()->route('indexKonversi')->with('success', 'Konversi nilai berhasil.');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function masukNilai()
    //{
    //    return view('pengurus.uploadnilai.masuk');
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

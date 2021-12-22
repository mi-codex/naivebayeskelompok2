<?php

namespace App\Http\Controllers;

use App\Exports\NaiveExport;
use App\Imports\NaiveImport;
use Maatwebsite\Excel\Facades\Excel;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Naive;
use App\Models\Mahasiswa;

class HitunganNaive extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Naive::all();
        $jumlahdata =  Mahasiswa::count();

        return view('pages.admin.perhitungan')->with([
            'items' => $items,
            'jumlahdata' => $jumlahdata,
            
        ]);
    }

    // PERHITUNGAN NAIVE BAYES 
    public function hitungNaive(){

        // P(Ci) LAYAK DAN TIDAK---------------
        $pciLayak = DB::table('datasets')
                        ->where('status_beasiswa' , 'LAYAK')
                        ->count('status_beasiswa'); 
        
        $pciTidakLayak = DB::table('datasets')
                        ->where('status_beasiswa' , 'TIDAK-LAYAK')
                        ->count('status_beasiswa');

        $totaldata2 = Naive::count();

        $hasilPciLayak = $pciLayak /  $totaldata2;
        $hasilPciTidakLayak = $pciTidakLayak /  $totaldata2;

        // P(X|Ci) LAYAK DAN TIDAK---------------------------------------

        // PENANGGUNG ORANG TUA
        $PenanggungOrangTuaLayak = DB::table('datasets')
                                ->where('penanggung' , 'ORANG TUA')
                                ->where('status_beasiswa' , 'LAYAK')
                                ->count('penanggung');

        $PenanggungOrangTuaTdkLayak = DB::table('datasets')
                                ->where('penanggung' , 'ORANG TUA')
                                ->where('status_beasiswa' , 'TIDAK-LAYAK')
                                ->count('penanggung');       

        $pxciHasilPenanggungOrangTuaLYK = $PenanggungOrangTuaLayak / $pciLayak; //layak
        $pxciHasilPenanggungOrangTuaTDKLYK = $PenanggungOrangTuaTdkLayak / $pciTidakLayak; // tidak layak
        
        // PENGHASILAN RENDAH
        $PenghasilanRendahLayak = DB::table('datasets')
                                ->where('penghasilan' , 'RENDAH')
                                ->where('status_beasiswa' , 'LAYAK')
                                ->count('penghasilan');

        $PenghasilanRendahTdkLayak = DB::table('datasets')
                                ->where('penghasilan' , 'RENDAH')
                                ->where('status_beasiswa' , 'TIDAK-LAYAK')
                                ->count('penghasilan');

        $pxciHasilPenghasilanRendahLayak = $PenghasilanRendahLayak / $pciLayak; //layak
        $pxciHasilPenghasilanRendahTidakLayak = $PenghasilanRendahTdkLayak / $pciTidakLayak; //tidak layak

        // KEPEMILIKAN RUMAH  = SEWA
        $RumahSewaLayak = DB::table('datasets')
                                ->where('rumah' , 'RUMAH SEWA')
                                ->where('status_beasiswa' , 'LAYAK')
                                ->count('rumah');

        $RumahSewaLTdkLayak = DB::table('datasets')
                                ->where('rumah' , 'RUMAH SEWA')
                                ->where('status_beasiswa' , 'TIDAK-LAYAK')
                                ->count('rumah');

        $pxciHasilRumahSewaLayak = $RumahSewaLayak / $pciLayak; //layak
        $pxciHasilRumahSewaTidakLayak = $RumahSewaLTdkLayak / $pciTidakLayak; //tidak layak

        //JENIS KELAMIN PENANGGUNG = PEREMPUAN
        $JenisKelaminLayak = DB::table('datasets')
                                ->where('jenis_kelamin' , 'PEREMPUAN')
                                ->where('status_beasiswa' , 'LAYAK')
                                ->count('jenis_kelamin');

        $JenisKelaminTdkLayak = DB::table('datasets')
                                ->where('jenis_kelamin' , 'PEREMPUAN')
                                ->where('status_beasiswa' , 'TIDAK-LAYAK')
                                ->count('jenis_kelamin');

        $pxciHasilJenisKelaminLayak = $JenisKelaminLayak / $pciLayak; //layak
        $pxciHasilJenisKelaminTidakLayak = $JenisKelaminTdkLayak / $pciTidakLayak; //tidak layak

        //PEKERJAAN PENANGGUNG = PEKERJA TIDAK TETAP
        $PekerjaTdkTetapLayak = DB::table('datasets')
                                ->where('pekerjaan' , 'PEKERJA TIDAK TETAP')
                                ->where('status_beasiswa' , 'LAYAK')
                                ->count('pekerjaan');

        $PekerjaTdkTetapTdkLayak = DB::table('datasets')
                                ->where('pekerjaan' , 'PEKERJA TIDAK TETAP')
                                ->where('status_beasiswa' , 'TIDAK-LAYAK')
                                ->count('pekerjaan');

        $pxciHasilPekerjaTdkTetapLayak= $PekerjaTdkTetapLayak / $pciLayak; //layak
        $pxciHasilPekerjaTdkTetapTdkLayak = $PekerjaTdkTetapTdkLayak / $pciTidakLayak; //tidak layak

        //JUMLAH TANGGUNGAN = SEDIKIT
        $TanggunganSedikitLayak = DB::table('datasets')
                                ->where('jumlah_tanggungan' , 'SEDIKIT')
                                ->where('status_beasiswa' , 'LAYAK')
                                ->count('jumlah_tanggungan');

        $TanggunganSedikitTdkLayak = DB::table('datasets')
                                ->where('jumlah_tanggungan' , 'SEDIKIT')
                                ->where('status_beasiswa' , 'TIDAK-LAYAK')
                                ->count('jumlah_tanggungan');

        $pxciHasilTanggunganSedikitLayak = $TanggunganSedikitLayak / $pciLayak; //layak
        $pxciHasilTanggunganSedikitTdkLayak = $TanggunganSedikitTdkLayak / $pciTidakLayak; //tidak layak

        //USIA PENANGGUNG = TUA
        $UsiaTuaLayak = DB::table('datasets')
                                ->where('usia' , 'TUA')
                                ->where('status_beasiswa' , 'LAYAK')
                                ->count('usia');

        $UsiaTuaTdkLayak = DB::table('datasets')
                                ->where('usia' , 'TUA')
                                ->where('status_beasiswa' , 'TIDAK-LAYAK')
                                ->count('usia');

        $pxciHasilUsiaTuaLayak = $UsiaTuaLayak / $pciLayak; //layak
        $pxciHasilUsiaTuaTdkLayak = $UsiaTuaTdkLayak / $pciTidakLayak; //tidak layak

        // NILAI UN = BAIK
        $NilaiUNBaikLayak = DB::table('datasets')
                                ->where('nilai_un' , 'BAIK')
                                ->where('status_beasiswa' , 'LAYAK')
                                ->count('nilai_un');

        $NilaiUNBaikTdkLayak = DB::table('datasets')
                                ->where('nilai_un' , 'BAIK')
                                ->where('status_beasiswa' , 'TIDAK-LAYAK')
                                ->count('nilai_un');

        $pxciHasilNilaiUNBaikLayak = $NilaiUNBaikLayak / $pciLayak; //layak
        $pxciHasilNilaiUNBaikTdkLayak = $NilaiUNBaikTdkLayak / $pciTidakLayak; //tidak layak


        // P(x|c)*P(c) LAYAK DAN TIDAK LAYAK---------------------------------------
        $layak = ($pxciHasilPenanggungOrangTuaLYK * 
                  $pxciHasilPenghasilanRendahLayak *
                  $pxciHasilRumahSewaLayak *
                  $pxciHasilJenisKelaminLayak *
                  $pxciHasilPekerjaTdkTetapLayak *
                  $pxciHasilTanggunganSedikitLayak *
                  $pxciHasilUsiaTuaLayak *
                  $pxciHasilNilaiUNBaikLayak
        ) * $hasilPciLayak;

        
        $tidaklayak = ($pxciHasilPenanggungOrangTuaTDKLYK * 
                  $pxciHasilPenghasilanRendahTidakLayak *
                  $pxciHasilRumahSewaTidakLayak *
                  $pxciHasilJenisKelaminTidakLayak *
                  $pxciHasilPekerjaTdkTetapTdkLayak *
                  $pxciHasilTanggunganSedikitTdkLayak *
                  $pxciHasilUsiaTuaTdkLayak *
                  $pxciHasilNilaiUNBaikTdkLayak
        ) * $hasilPciTidakLayak;
        
                
        
        // KESIMPULAN HASIL LAYAK ATAU TIDAK LAYAK
        
       
        return view('pages.admin.hasilperhitungan')->with([

            'hasilPciLayak' => $hasilPciLayak,
            'hasilPciTidakLayak' => $hasilPciTidakLayak,

            'pxciHasilPenanggungOrangTuaLYK' => $pxciHasilPenanggungOrangTuaLYK,
            'pxciHasilPenanggungOrangTuaTDKLYK' => $pxciHasilPenanggungOrangTuaTDKLYK,
            
            'pxciHasilPenghasilanRendahLayak' => $pxciHasilPenghasilanRendahLayak,
            'pxciHasilPenghasilanRendahTidakLayak' => $pxciHasilPenghasilanRendahTidakLayak,

            'pxciHasilRumahSewaLayak' => $pxciHasilRumahSewaLayak,
            'pxciHasilRumahSewaTidakLayak' => $pxciHasilRumahSewaTidakLayak,

            'pxciHasilJenisKelaminLayak' => $pxciHasilJenisKelaminLayak,
            'pxciHasilJenisKelaminTidakLayak' => $pxciHasilJenisKelaminTidakLayak,

            'pxciHasilPekerjaTdkTetapLayak' => $pxciHasilPekerjaTdkTetapLayak,
            'pxciHasilPekerjaTdkTetapTdkLayak' => $pxciHasilPekerjaTdkTetapTdkLayak,
            
            'pxciHasilTanggunganSedikitLayak' => $pxciHasilTanggunganSedikitLayak,
            'pxciHasilTanggunganSedikitTdkLayak' => $pxciHasilTanggunganSedikitTdkLayak,

            'pxciHasilUsiaTuaLayak' => $pxciHasilUsiaTuaLayak,
            'pxciHasilUsiaTuaTdkLayak' => $pxciHasilUsiaTuaTdkLayak,

            'pxciHasilNilaiUNBaikLayak' => $pxciHasilNilaiUNBaikLayak,
            'pxciHasilNilaiUNBaikTdkLayak' => $pxciHasilNilaiUNBaikTdkLayak,

            'layak' => $layak,
            'tidaklayak' => $tidaklayak,

        ]);

    }

    // HASIL BEASISWA
    public function hasilBeasiswa(){

        $items2 = Mahasiswa::all();

        return view('pages.v_hasilbeasiswa')->with([
            'items2' => $items2,
            
        ]);

    }

    //EXPORT EXCEL ----------------------
    public function naiveExportExcel()
    {
        return Excel::download(new NaiveExport, 'Datasetmahasiswa.xlsx');
    }

    //IMPORT EXCEL ----------------------
    public function naiveImportExcel(Request $request)
    {
       
        Excel::import(new NaiveImport, 'datasets.xlsx');

        return redirect()->route('naive')->with('pesan', 'Dataset Berhasil ditambakan!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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

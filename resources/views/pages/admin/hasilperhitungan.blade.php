@extends('template.v_template')

@section('judul', 'Hasil Perhitungan')

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('konten')


<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col">
                    <h1 class=" text-white">Hasil Perhitungan</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content -->
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">Detail Perhitungan Naive Bayes Data Mahasiswa</h3>
                </div>
                <div class="card-body">

                    <!-- Konten  -->
                    <div class="row mb-3">
                        <div class="col">
                            <!-- Hasil perhitungan Data Set -->
                            <h2>P(Ci)</h2>
                            <p class="text-primary font-weight-bold">P(KATEGORI = LAYAK) = {{ $hasilPciLayak }}</p>
                            <p class="text-primary font-weight-bold">P(KATEGORI = TIDAK-LAYAK) = {{ $hasilPciTidakLayak }}</p>
                            
                            <h2>P(X|Ci)</h2>
                            <p class="text-primary font-weight-bold">P(PENANGGUNG = ORANG TUA | KATEGORI = LAYAK) = {{ $pxciHasilPenanggungOrangTuaLYK }}</p>
                            <p class="text-primary font-weight-bold">P(PENANGGUNG = ORANG TUA | KATEGORI = TIDAK-LAYAK) = {{ $pxciHasilPenanggungOrangTuaTDKLYK }}</p>
                            <br>
                            <p class="text-primary font-weight-bold">P(PENGHASILAN PENANGGUNG = RENDAH | KATEGORI = LAYAK) = {{ $pxciHasilPenghasilanRendahLayak }}</p>
                            <p class="text-primary font-weight-bold">P(PENGHASILAN PENANGGUNG = RENDAH | KATEGORI = TIDAK-LAYAK) = {{ $pxciHasilPenghasilanRendahTidakLayak }}</p>
                            <br>
                            <p class="text-primary font-weight-bold">P(KEPEMILIKAN RUMAH  = SEWA | KATEGORI = LAYAK) = {{ $pxciHasilRumahSewaLayak }}</p>
                            <p class="text-primary font-weight-bold">P(KEPEMILIKAN RUMAH  = SEWA | KATEGORI = TIDAK-LAYAK) = {{ $pxciHasilRumahSewaTidakLayak }}</p>
                            <br>
                            <p class="text-primary font-weight-bold">P(JENIS KELAMIN PENANGGUNG = PEREMPUAN | KATEGORI = LAYAK) = {{ $pxciHasilJenisKelaminLayak }} </p>
                            <p class="text-primary font-weight-bold">P(JENIS KELAMIN PENANGGUNG = PEREMPUAN | KATEGORI = TIDAK-LAYAK) = {{ $pxciHasilJenisKelaminTidakLayak }}</p>
                            <br>
                            <p class="text-primary font-weight-bold">P(PEKERJAAN PENANGGUNG = PEKERJA TIDAK TETAP | KATEGORI = LAYAK) = {{ $pxciHasilPekerjaTdkTetapLayak }}</p>
                            <p class="text-primary font-weight-bold">P(PEKERJAAN PENANGGUNG = PEKERJA TIDAK TETAP | KATEGORI = TIDAK-LAYAK) = {{ $pxciHasilPekerjaTdkTetapTdkLayak }}</p>
                            <br>
                            <p class="text-primary font-weight-bold">P(JUMLAH TANGGUNGAN = SEDIKIT | KATEGORI = LAYAK) = {{ $pxciHasilTanggunganSedikitLayak }}</p>
                            <p class="text-primary font-weight-bold">P(JUMLAH TANGGUNGAN = SEDIKIT | KATEGORI = TIDAK-LAYAK) = {{ $pxciHasilTanggunganSedikitTdkLayak }}</p>
                            <br>
                            <p class="text-primary font-weight-bold">P(USIA PENANGGUNG = TUA | KATEGORI = LAYAK) = {{ $pxciHasilUsiaTuaLayak }}</p>
                            <p class="text-primary font-weight-bold">P(USIA PENANGGUNG = TUA | KATEGORI = TIDAK-LAYAK) ={{ $pxciHasilUsiaTuaTdkLayak }} </p>
                            <br>
                            <p class="text-primary font-weight-bold">P(NILAI UN = BAIK | KATEGORI = LAYAK) = {{ $pxciHasilNilaiUNBaikLayak }}</p>
                            <p class="text-primary font-weight-bold">P(NILAI UN = BAIK | KATEGORI = TIDAK-LAYAK) = {{ $pxciHasilNilaiUNBaikTdkLayak }}</p>
                            
                            <h2>P(x|c)*P(c)</h2>
                            <p class="text-primary font-weight-bold">LAYAK = {{ $layak }}</p>
                            <p class="text-primary font-weight-bold">TIDAK LAYAK = {{ $tidaklayak }}</p>

                            @if ($layak > $tidaklayak )
                            <h2 class="text-white bg-success text-center">MAKA HASIL TERTINGGINYA ADALAH <u>LAYAK</u> </h2>
                            @elseif ($layak < $tidaklayak )
                            <h2 class="text-white bg-success text-center">MAKA HASIL TERTINGGINYA ADALAH <u>TIDAK LAYAK</u> </h2>
                            @endif

                        </div>
                    </div>

                    
                    
                </div>
            </div>
            <!-- End Of card-body -->
        </div>
    </div>
</div>
</div>
<!-- End of Content -->

@endsection
@extends('template.v_template')

@section('judul', 'Panduan')

@section('konten')


<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col">
                    <h1 class=" text-white">Panduan</h1>
                </div>
            </div>
        </div>
    </div>
</div>


{{--
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-8">
            <div class="card bg-default">

            </div>
        </div>

    </div> --}}

    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-transparent">

                    </div>
                    <div class="card-body m-2">

                        <h3 class="text-primary">Tata Cara Pengisian Data</h3>
                        <div class="text-primary">
                            <ol>
                                <li>Klik Menu "Input Data Mahasiswa"</li>
                                <li>Masukkan Data diri anda yang sesuai dengan apa yang minta</li>
                                <li>Tunggu hasil penerimaan beasiswa anda di Menu "Hasil Beasiswa"</li>
                            </ol>
                            <p class="text-danger font-weight-bold">PERHATIAN: Isi data anda secara jujur! dan bila data
                                yang diberikan tidak sesuai maka akan ada sanksi yang anda terima. Aplikasi ini tidak hanya
                                ditentukan oleh nilai UN Anda.</p>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection
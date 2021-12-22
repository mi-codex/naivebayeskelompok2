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
                        @if (auth()->user()->level==1)
                        <h3 class="text-primary">Tata Cara Pengisian Data Sebagai Admin</h3>
                        <div class="text-primary">
                            <ol>
                                <li>Klik Menu "Perhitungan"</li>
                                <li>Import Datasets yang diberikan</li>
                                <li>Export Datasets bila diperlukan</li>
                                <li>Contoh Format Datasets Excel terdapat pada Folder Aplikasi Laravel di Folder Public dengan Nama file datasets.xlsx</li>
                                <li>Setelah Mengimport data, Maka dataset yang anda import akan muncul dibawah kedua tombol tersebut</li>
                                <li>Pastikan Sebelum Melakukan Perhitungan Cek Data Masuk Terlebih dahulu</li>
                            </ol>
                            <p class="text-danger font-weight-bold">PERHATIAN: Isi data anda secara jujur! dan bila data
                                yang diberikan tidak sesuai maka akan ada sanksi yang anda terima bahkan termasuk Admin.</p>
                        </div>
                        @elseif (auth()->user()->level==2)
                        <h3 class="text-primary">Tata Cara Pengisian Data Sebagai Mahasiswa</h3>
                        <div class="text-primary">
                            <ol>
                                <li>Klik Menu "Input Data Mahasiswa"</li>
                                <li>Masukkan Data diri anda yang sesuai dengan apa yang minta</li>
                                <li>Tunggu hasil penerimaan beasiswa anda di Menu "Hasil Beasiswa"</li>
                            </ol>
                            <p class="text-danger font-weight-bold">PERHATIAN: Isi data anda secara jujur! dan bila data
                                yang diberikan tidak sesuai maka akan ada sanksi yang anda terima. Aplikasi ini tidak hanya
                                ditentukan oleh nilai UN Anda.</p>
                            <p class="text-yellow font-weight-bold">Contact Admin : Admin@gmail.com</p>
                        </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection
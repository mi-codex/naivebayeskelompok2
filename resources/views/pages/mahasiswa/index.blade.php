@extends('template.v_template')

@section('judul', 'Input Data')



@section('konten')


<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col">
                    <h1 class=" text-white">Input Data Mahasiswa</h1>
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
                    <h3 class="mb-0">Data Mahasiswa</h3>
                </div>
                <div class="card-body">

                    <!-- Konten  -->
                    <div class="row mb-3">
                        <div class="col">

                            <!-- Data diri mahasiswa -->
                            @if (session('pesan'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('pesan') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            <p class="text-danger font-weight-bold">Perhatian: Sebelum mengisi Data diri anda pastikan
                                Klik Menu "Panduan"</p>
                            <p class="text-primary font-weight-bold">Contoh Detail Tabel Pengisian</p>
                            <img src="{{ asset('img') }}/detailinputnew.jpg" alt="DETAILINPUT" width="800px"
                                class="border border-primary">
                            <p class="text-primary font-weight-bold">*Masukkan Data sesuaikan Detail Tabel Pengisian</p>

                            {{-- FORM INPUT MAHASISWA --}}
                            <form action="/inputdatamhs/store" method="POST" class="mt-4">
                                @csrf

                                {{-- inputan nama mahasiswa --}}
                                <div class="form-group">
                                    <label for="nama_mhs" class="form-control-label">Nama Mahasiswa</label>
                                    <input type="text" name="nama_mhs" value="{{ old('nama_mhs') }}"
                                        class="form-control" @error('nama_mhs') is-invalid @enderror
                                        placeholder="Isi nama anda dengan huruf Kapital..."  />
                                    @error('nama_mhs') <div class="text-muted">{{ $message }}</div>@enderror
                                </div>

                                {{-- inputan tipe penanggung --}}
                                <div class="form-group">
                                    <label for="penanggung" class="form-control-label">Penanggung</label>
                                    <select class="form-control" id="penanggung" name="penanggung">
                                        <option>ORANG TUA</option>
                                        <option>WALI</option>
                                        <option>DIRI SENDIRI</option>
                                    </select>
                                </div>

                                {{-- inputan penghasilan penanggung --}}
                                <div class="form-group">
                                    <label for="penghasilan" class="form-control-label">Penghasilan
                                        Penanggung</label>
                                    <select class="form-control" id="penghasilan" name="penghasilan">
                                        <option>RENDAH</option>
                                        <option>CUKUP</option>
                                        <option>RATA-RATA</option>
                                        <option>TINGGI</option>
                                    </select>
                                </div>

                                {{-- inputan Kepemilikan Rumah --}}
                                <div class="form-group">
                                    <label for="rumah" class="form-control-label">Kepemilikan Rumah</label>
                                    <select class="form-control" id="rumah" name="rumah">
                                        <option>RUMAH SENDIRI</option>
                                        <option>RUMAH SEWA</option>
                                    </select>
                                </div>

                                {{-- inputan Jenis Kelamin Penanggung --}}
                                <div class="form-group">
                                    <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin
                                        Penanggung</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option>LAKI-LAKI</option>
                                        <option>PEREMPUAN</option>
                                    </select>
                                </div>

                                {{-- inputan Pekerjaan Penanggung --}}
                                <div class="form-group">
                                    <label for="pekerjaan" class="form-control-label">Pekerjaan Penanggung</label>
                                    <select class="form-control" id="pekerjaan" name="pekerjaan">
                                        <option>PEKERJA TETAP</option>
                                        <option>PEKERJA TIDAK TETAP</option>
                                    </select>
                                </div>

                                {{-- inputan Jumlah Tanggungan --}}
                                <div class="form-group">
                                    <label for="jumlah_tanggungan" class="form-control-label">Jumlah
                                        Tanggungan</label>
                                    <select class="form-control" id="jumlah_tanggungan" name="jumlah_tanggungan">
                                        <option>SEDIKIT</option>
                                        <option>SEDANG</option>
                                        <option>BANYAK</option>
                                        <option>TIDAK ADA</option>
                                    </select>
                                </div>

                                {{-- inputan usia penanggung --}}
                                <div class="form-group">
                                    <label for="usia" class="form-control-label">Usia Penanggung</label>
                                    <select class="form-control" id="usia" name="usia">
                                        <option>MUDA</option>
                                        <option>TUA</option>
                                    </select>
                                </div>

                                {{-- inputan nilai_un --}}
                                <div class="form-group">
                                    <label for="nilai_un" class="form-control-label">Nilai UN</label>
                                    <select class="form-control" id="nilai_un" name="nilai_un">
                                        <option>KURANG</option>
                                        <option>CUKUP</option>
                                        <option>BAIK</option>
                                        <option>SANGAT BAIK</option>
                                    </select>
                                </div>


                                {{-- Button Submit --}}
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">
                                        Submit Data
                                    </button>
                                </div>

                            </form>


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
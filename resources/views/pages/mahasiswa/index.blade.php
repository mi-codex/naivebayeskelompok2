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


                            <p class="text-danger font-weight-bold">Perhatian: Sebelum Mengisi Data diri anda pastikan
                                Klik Menu "Panduan"</p>
                            <p class="text-primary font-weight-bold">Contoh Detail Tabel Pengisian</p>
                            <p class="text-primary font-weight-bold">Masukkan Data sesuaikan Detail Tabel Pengisian</p>

                            <img src="{{ asset('img') }}/detailinput.jpg" alt="">

                                @if (session('pesan'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('pesan') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif


                            <form action="/inputdatamhs/store" method="POST">
                                @csrf

                                {{-- inputan nama mahasiswa --}}
                                <div class="form-group">
                                    <label for="nama_mhs" class="form-control-label">Nama Mahasiswa</label>
                                    <input type="text" name="nama_mhs" value="{{ old('nama_mhs') }}"
                                        class="form-control" @error('nama_mhs') is-invalid @enderror />
                                    @error('nama_mhs') <div class="text-muted">{{ $message }}</div>@enderror
                                </div>

                                {{-- inputan tipe penanggung --}}
                                <div class="form-group">
                                    <label for="penanggung" class="form-control-label">Penanggung</label>
                                    <input type="text" name="penanggung" value="{{ old('penanggung') }}"
                                        class="form-control" @error('penanggung') is-invalid @enderror />
                                    @error('penanggung') <div class="text-muted">{{ $message }}</div>@enderror
                                </div>

                                {{-- inputan penghasilan penanggung --}}
                                <div class="form-group">
                                    <label for="penghasilan" class="form-control-label">Penghasilan
                                        Penanggung</label>
                                    <input type="text" name="penghasilan" value="{{ old('penghasilan') }}"
                                        class="form-control" @error('penghasilan') is-invalid @enderror />
                                    @error('penghasilan') <div class="text-muted">{{ $message }}</div>@enderror
                                </div>

                                {{-- inputan Kepemilikan Rumah --}}
                                <div class="form-group">
                                    <label for="rumah" class="form-control-label">Kepemilikan Rumah</label>
                                    <input type="text" name="rumah" value="{{ old('rumah') }}" class="form-control"
                                        @error('rumah') is-invalid @enderror />
                                    @error('rumah') <div class="text-muted">{{ $message }}</div>@enderror
                                </div>

                                {{-- inputan Jenis Kelamin Penanggung --}}
                                <div class="form-group">
                                    <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin
                                        Penanggung</label>
                                    <input type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                                        class="form-control" @error('jenis_kelamin') is-invalid @enderror />
                                    @error('jenis_kelamin') <div class="text-muted">{{ $message }}</div>@enderror
                                </div>

                                {{-- inputan Pekerjaan Penanggung --}}
                                <div class="form-group">
                                    <label for="pekerjaan" class="form-control-label">Pekerjaan Penanggung</label>
                                    <input type="text" name="pekerjaan" value="{{ old('pekerjaan') }}"
                                        class="form-control" @error('pekerjaan') is-invalid @enderror />
                                    @error('pekerjaan') <div class="text-muted">{{ $message }}</div>@enderror
                                </div>

                                {{-- inputan Jumlah Tanggungan --}}
                                <div class="form-group">
                                    <label for="jumlah_tanggungan" class="form-control-label">Jumlah
                                        Tanggungan</label>
                                    <input type="text" name="jumlah_tanggungan" value="{{ old('jumlah_tanggungan') }}"
                                        class="form-control" @error('jumlah_tanggungan') is-invalid @enderror />
                                    @error('jumlah_tanggungan') <div class="text-muted">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- inputan usia penanggung --}}
                                <div class="form-group">
                                    <label for="usia" class="form-control-label">Usia Penanggung</label>
                                    <input type="text" name="usia" value="{{ old('usia') }}" class="form-control"
                                        @error('usia') is-invalid @enderror />
                                    @error('usia') <div class="text-muted">{{ $message }}</div>@enderror
                                </div>

                                {{-- inputan nilai_un --}}
                                <div class="form-group">
                                    <label for="nilai_un" class="form-control-label">Usia Penanggung</label>
                                    <input type="text" name="nilai_un" value="{{ old('nilai_un') }}"
                                        class="form-control" @error('nilai_un') is-invalid @enderror />
                                    @error('nilai_un') <div class="text-muted">{{ $message }}</div>@enderror
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
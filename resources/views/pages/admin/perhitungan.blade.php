@extends('template.v_template')

@section('judul', 'Perhitungan')

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
                    <h1 class=" text-white">Perhitungan</h1>
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
                    <h3 class="mb-0">Perhitungan Naive Bayes Data Mahasiswa</h3>
                </div>
                <div class="card-body">

                    <!-- Konten  -->
                    <div class="row mb-3">
                        <div class="col">
                            <!-- Data Set -->
                            <p class="text-white text-center font-weight-bold bg-info"> Perhatian: Sebelum mengisi Data, pastikan
                                Klik Menu "Panduan"</p>
                            <h2 class="text-success">Tabel Data Set</h2> <br>
                            <a href="/perhitungan/naiveExport" class="btn btn-primary">Export Data</a>
                            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#exampleModal">
                                Import Data
                            </button>

                            @if (session('pesan'))
                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ session('pesan') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        {{-- IMPORT DATA EXCEL --}}
                                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                               
                                                    <div class="form-group">
                                                      <label for="exampleFormControlFile1">Import File Excel (Upload)</label>
                                                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                    </div>
                                                  
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Kembali</button>
                                                <button type="submit" class="btn btn-success">Kirim Data</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <table class="table table-responsive w-auto">
                                <thead class="thead-light">
                                    <tr>
                                        <th>NO.</th>
                                        <th>NAMA MAHASISWA</th>
                                        <th>PENANGGUNG</th>
                                        <th>PENGHASILAN</th>
                                        <th>KEPEMILIKAN RUMAH</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>PEKERJAAN</th>
                                        <th>JUMLAH TANGGUNGAN</th>
                                        <th>USIA</th>
                                        <th>NILAI UN</th>
                                        <th>STATUS BEASISWA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama_mhs }}</td>
                                        <td>{{ $item->penanggung }}</td>
                                        <td>{{ $item->penghasilan }}</td>
                                        <td>{{ $item->rumah }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->pekerjaan }}</td>
                                        <td>{{ $item->jumlah_tanggungan }}</td>
                                        <td>{{ $item->usia }}</td>
                                        <td>{{ $item->nilai_un }}</td>
                                        <td class="text-success font-weight-bold">{{ $item->status_beasiswa }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <h2 class="text-info">Jumlah Total Data Input Mahasiswa Masuk = {{ $jumlahdata }}</h2>
                            <a href="#" class="btn btn-info">Mulai Perhitungan Naive</a>
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
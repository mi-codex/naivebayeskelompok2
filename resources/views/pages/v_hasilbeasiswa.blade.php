@extends('template.v_template')

@section('judul', 'Hasil Beasiswa')



@section('konten')


<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col">
                    <h1 class=" text-white">Hasil Beasiswa</h1>
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

                <div class="card-body">

                    <!-- Konten  -->
                    <div class="row mb-3">
                        <div class="col">
                            <h2 class="text-success mb-3">Seluruh Data Hasil Penerimaan Beasiswa</h2>
                            <table class="table table-responsive w-auto">
                                <thead class="thead-light">
                                    <tr>
                                        <th>NO.</th>
                                        <th>NAMA MAHASISWA</th>
                                        <th>PENANGGUNG</th>
                                        <th>PENGHASILAN</th>
                                        <th>KEPEMILIKAN RUMAH</th>
                                        <th>JENIS KELAMIN PENANGGUNG</th>
                                        <th>PEKERJAAN</th>
                                        <th>JUMLAH TANGGUNGAN</th>
                                        <th>USIA</th>
                                        <th>NILAI UN</th>
                                        <th>STATUS BEASISWA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items2 as $item )
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
                                        
                                        
                                        {{-- @if ($layak > $tidaklayak )
                                        <td>
                                            <h3 class="text-succes">LAYAK</h3>
                                        </td>
                                        
                                        @elseif ($layak < $tidaklayak ) 
                                        <td>
                                            <h3 class="text-danger">TIDAK LAYAK</h3>
                                        </td>
                                        @endif --}}


                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col">

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
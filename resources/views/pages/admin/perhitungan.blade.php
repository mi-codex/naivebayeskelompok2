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
                        <h3 class="mb-0">Data Mahasiswa</h3>
                    </div>
                    <div class="card-body">

                        <!-- Konten  -->
                        <div class="row mb-3">
                            <div class="col">
                                <!-- Data Set -->
                                <h3 class="text-success">Data Set</h3> <br>
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Import Data
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Masukkan File Excel</label>
                                                        <input type="file" class="form-control-file"
                                                            id="exampleFormControlFile1">
                                                    </div>
                                                </form>
                                                <a href="/downloadfile" class="text-sm text-success"> >>Download Contoh
                                                    Format
                                                    Excel</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Kirim Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

@push('scripts')
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#daftarMhs').DataTable();
        });
    </script>
@endpush

@extends('template.v_template')

@section('judul', 'Beranda')

@section('konten')


    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col">
                        <h1 class=" text-white">Beranda</h1>
                    </div>


                </div>
            </div>
        </div>
    </div>


    {{-- <!-- Page content -->
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
                        <h2 class="mb-0">Selamat Datang di Aplikasi Naive Bayes</h2>
                    </div>
                    <div class="card-body m-2">

                        


                        <h3 class="text-primary">Anggota Kelompok 2 :</h3>
                        <div class="text-primary">
                            <ul>
                                <li>Muhammad Irfan (170155201041)</li>
                                <li>Raja Dini Kurnianingsih (180155201035)</li>
                                <li>Siti Marliana (180155201016)</li>
                                <li>Dicky Ferialdi Hutasoit (180155201027)</li>
                            </ul>
                        </div>
                        <hr>
                        <br>

                        <h2>Pengertian Naive Bayes</h2>

                        <p>Naïve Bayes Classifier merupakan sebuah metoda klasifikasi yang berakar pada teorema Bayes .
                            Metode pengklasifikasian dengan menggunakan metode probabilitas dan statistik yang dikemukakan
                            oleh ilmuwan Inggris Thomas Bayes , yaitu memprediksi peluang di masa depan berdasarkan
                            pengalaman di
                            masa sebelumnya sehingga dikenal sebagai Teorema Bayes . Ciri utama dari Naïve Bayes Classifier
                            ini adalah asumsi yang sangat kuat (naïf) akan independensi dari masing-masing kondisi /
                            kejadian.
                        </p>

                        <P>Keuntungan penggunan adalah bahwa metoda ini hanya membutuhkan jumlah data pelatihan ( training
                            data ) yang kecil unit menentukan estimasi parameter yang diperlukan dalam proses
                            pengklasifikasian.Karena yang diasumsikan sebagai variable independent, maka hanya varians dari
                            suatu variable
                            dalam sebuah kelas yang dibutuhkan unit menentukan klasifikasi, bukan keseluruhan dari matriks
                            kovarians.
                        </P>
                        <h3>Kegunaan Naïve Bayes</h3>
                        <ol>
                            <li>Mengklasifikasikan dokumen teks seperti teks berita ataupun teks akademis</li>
                            <li>Sebagai metode machine learning yang menggunakan probabilitas</li>
                            <li>Untuk membuat diagnosis medis secara otomatis</li>
                            <li> Mendeteksi atau menyaring spam</li>
                            <li> dan masih banyak yang lainnya</li>
                        </ol>



                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

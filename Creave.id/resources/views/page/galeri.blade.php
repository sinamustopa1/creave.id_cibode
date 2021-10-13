@extends('layout.base')
@section('content')

<!-- Page Content -->
<section class="bg-home">

    <div class="container ">

        <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Gallery Kegiatan Energi Nusantara</h1>

        <hr class="mt-2 mb-5">
        <h5 class="font-weight-light text-cente mt-4 mb-5">Berikut ini adalah dokumentasi kegiatan-kegiatan kami di
            seluruh lokasi implementasi program Energi Nusantara.
        </h5>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="hover">
                    <img class="img-fluid img-thumbnail" src="{{ url('assets/img/contoh.jpg') }}"
                        alt="">
                    <div class="overlay">
                        <h2> BERBAGI LISTRIK UNTUK KORBAN GEMPA LOMBOK </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="hover">
                    <img class="img-fluid img-thumbnail" src="{{ url('assets/img/contoh2.jpg') }}"
                        alt="">
                    <div class="overlay">
                        <h2>BERBAGI LISTRIK UNTUK MADRASAH, DESA TEPAL, SUMBAWA
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="hover">
                    <img class="img-fluid img-thumbnail" src="{{ url('assets/img/contoh3.jpg') }}"
                        alt="">
                    <div class="overlay">
                        <h2>BERBAGI LISTRIK UNTUK PESANTREN AL QALAM, TOMPONG, NTT
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="hover">
                    <img class="img-fluid img-thumbnail" src="{{ url('assets/img/contoh4.jpg') }}"
                        alt="">
                    <div class="overlay">
                        <h2>BERBAGI LISTRIK UNTUK KORBAN GEMPA AMBON
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="hover">
                    <img class="img-fluid img-thumbnail" src="{{ url('assets/img/contoh5.jpg') }}"
                        alt="">
                    <div class="overlay">
                        <h2>BERBAGI LISTRIK UNTUK PUSKESMAS, DESA TEPAL, SUMBAWA
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="hover">
                    <img class="img-fluid img-thumbnail"
                        src="{{ url('assets/img/contoh6.jpeg') }}" alt="">
                    <div class="overlay">
                        <h2>BERBAGI LISTRIK UNTUK PRODUKSI PERTANIAN KOPI, GARUT
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="hover">
                    <img class="img-fluid img-thumbnail" src="{{ url('assets/img/contoh7.jpg') }}"
                        alt="">
                    <div class="overlay">
                        <h2>TPQ AL MUMTAZ, LOMBOK TENGAH
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="hover">
                    <img class="img-fluid img-thumbnail" src="{{ url('assets/img/contoh8.jpg') }}"
                        alt="">
                    <div class="overlay">
                        <h2>MASJID AL MUBARAKAH, SUMBAWA    
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="hover">
                    <img class="img-fluid img-thumbnail" src="{{ url('assets/img/contoh9.jpg') }}"
                        alt="">
                    <div class="overlay">
                        <h2>DUSUN JELANTIK, LOMBOK UTARA
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--container -->

@endsection

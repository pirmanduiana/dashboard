@extends('master')
@section('dashboard')
    <div class="section background">
        <div class="contents">
            <div class="rows">
                <a class="column c1 material_ripple" href="#" data-color="rgba(255,255,255, .4)">
                    <div class="image">
                        <img src="./assets/images/icons/ico-visimisi.png" alt="">
                    </div>
                    <h2>Visi dan Misi</h2>
                </a>

                <a class="column c2 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-organisasi.png" alt="">
                    </div>
                    <h2>Struktur Organisasi</h2>
                </a>

                <a class="column c3 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-foto.png" alt="">
                    </div>
                    <h2>Foto Kegiatan</h2>
                </a>

                <a class="column c4 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-video.png" alt="">
                    </div>
                    <h2>Video Profile</h2>
                </a>
                
                <a class="column c5 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-pemkab.png" alt="">
                    </div>
                    <h2>Website Pemkab</h2>
                </a>
            </div>
            <div class="rows">
                <a class="column c6 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-pemkab.png" alt="">
                    </div>
                    <h2>Website PPID</h2>
                </a>
                <a class="column c7 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-kominfo.png" alt="">
                    </div>
                    <h2>Website Diskominfo</h2>
                </a>
                <a class="column c8 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-cctv.png" alt="">
                    </div>
                    <h2>Persebaran CCTV</h2>
                </a>
                <a class="column c9 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-wifi.png" alt="">
                    </div>
                    <h2>Persebaran Wifi</h2>
                </a>
                <a class="column c10 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-map.png" alt="">
                    </div>
                    <h2>Map Badung</h2>
                </a>
            </div>
        </div>
    </div>

@endsection


@section('scripts')            
    {{ Html::script('assets/js/main.js') }}
@endsection
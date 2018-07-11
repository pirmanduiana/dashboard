@extends('master')
@section('dashboard')
    <div class="section background">
        <div class="contents">
            <div class="rows row-first">
                <a class="column c1" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-visimisi.png" alt="">
                    </div>
                    <h2>Visi dan Misi</h2>
                </a>
                <a class="column c2" href="">
                    <div class="image">
                        <img src="./assets/images/icons/ico-foto.png" alt="">
                    </div>
                    <h2>Foto</h2>
                </a>
                <a class="column c3" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-organisasi.png" alt="">
                    </div>
                    <h2>Struktur Organisasi</h2>
                </a>
                <a class="column c4" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-pemkab.png" alt="">
                    </div>
                    <h2>Website Pemkab</h2>
                </a>
            </div>
            <div class="rows row-second">
                <a class="column c5" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-video.png" alt="">
                    </div>
                    <h2>Video Profile</h2>
                </a>
                <a class="column c6" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-kominfo.png" alt="">
                    </div>
                    <h2>Website Diskominfo</h2>
                </a>
                <a class="column c7" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-pemkab.png" alt="">
                    </div>
                    <h2>Website PPID</h2>
                </a>
                <a class="column c8" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-map.png" alt="">
                    </div>
                    <h2>Map Badung</h2>
                </a>
            </div>
        </div>
    </div>

    <video id="my-player" class="video-js" width="640" height="264" controls preload="auto" poster="//vjs.zencdn.net/v/oceans.png" data-setup='{}'>
        <source src="{{ url('assets/videos/sequence_1.mp4') }}" type="video/mp4"></source>        
    </video>
@endsection


@section('scripts')            
    {{ Html::script('assets/js/main.js') }}
@endsection
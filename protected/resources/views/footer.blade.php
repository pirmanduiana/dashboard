<div class="footer">
    <div class="main-btn-action">
        <div class="content-btn-action">
            <a class="btn-action prev" href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
            <a class="btn-action home" id="aBackButton" href="#" onclick=""><i class="fa fa-home" aria-hidden="true"></i></a>
            <a class="btn-action next" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="copyright">
        <p> © Copyright 2018 Dinas Komunikasi dan Informatika Kabupaten Badung</p>
    </div>

    <!-- Modal Box Video 3 -->
    <div id="myNav3" class="overlay fullModal">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox2">
                <video id='my-player3' class='video-js' controls preload='auto' poster='//vjs.zencdn.net/v/oceans.png' data-setup='{"fluid": true}'>
                    <source src='{{ url("assets/videos/sequence_2.mp4") }}' type='video/mp4'></source>
                </video>
            </div>
        </div>
    </div>            
    <!-- End Modal -->

    <!-- Modal Box Video 4 -->
    <div id="myNav4" class="overlay fullModal">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox5">
                <video id='my-player4' class='video-js' controls preload='auto' poster='//vjs.zencdn.net/v/oceans.png' data-setup='{"fluid": true}'>
                    <source src='{{ url("assets/videos/sequence_1.mp4") }}' type='video/mp4'></source>
                </video>
            </div>
        </div>
    </div>            
    <!-- End Modal -->

    <!-- Modal Box lainnya -->
    <div id="myNav_" class="overlay fullModal">
        <a href="#" class="closebtn" onclick="box1.sleep();">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox_">
                <!-- content embed -->
            </div>
        </div>
    </div>            
    <!-- End Modal -->
</div>

<script>
    var url_visimisi = "{{ route('get.visimisi') }}";
    var url_struktur = "{{ route('get.struktur') }}";
    var url_badungkab = "{{ route('get.badungkab') }}";
    var url_kominfo = "{{ route('get.kominfo') }}";
    var url_ppid = "{{ route('get.ppid') }}";
    var url_badungmap = "{{ route('get.badungmap') }}";
</script>


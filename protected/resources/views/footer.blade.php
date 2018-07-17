<div class="footer">
    <div class="main-btn-action">
        <div class="content-btn-action">
            <!-- <a class="btn-action prev" href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a> -->
            <a class="btn-action home" id="aBackButton" href="#" onclick=""><i class="fa fa-home" aria-hidden="true"></i></a>
            <!-- <a class="btn-action next" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a> -->
        </div>
    </div>
    <div class="copyright">
        <p> © Copyright 2018 Dinas Komunikasi dan Informatika Kabupaten Badung</p>
    </div>

    <!-- Modal Box Video 1 -->
    <div id="myNav2" class="overlay fullModal">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox2">
                <video id='apps-video2' class='video-js'>
                    <!-- video rendered here -->
                </video>
            </div>
        </div>
    </div>            
    <!-- End Modal -->
    <script>var url_video1 = '{{ url("assets/videos/sequence_2.mp4") }}';</script>
<<<<<<< HEAD
    <script>var url_video2 = '{{ url("assets/videos/sequence_1.mp4") }}';</script>     
    <script>var url_screensaver = '{{ url("assets/videos/screensaver-final.mov") }}';</script> 
=======
    <script>var url_video2 = '{{ url("assets/videos/v_esurat.mp4") }}';</script>     
>>>>>>> f23489f6a29f8843c2d2c5f919367996df8944f2

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

    <!-- playlist video -->
    <!-- Modal Box Video 1 -->
    <div id="myNavPl" class="overlay fullModal">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBoxPl">
                <video id="main-playlist" class="video-js">
                </video>
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


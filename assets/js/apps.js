$(document).ready(function(){

    $(".column.c1").on("click", function(){
        setTimeout(
            function() {
                box1.play();
        },
        500);
    });
    $(".column.c2").on("click", function(){
        setTimeout(
            function() {
                box2.play();
        },
        500);
    });
    $(".column.c3").on("click", function(){
        setTimeout(
            function() {
                box3.play();
        },
        500);
    });
    $(".column.c4").on("click", function(){
        setTimeout(
            function() {
                box4.play();
        },
        500);
    });
    $(".column.c5").on("click", function(){
        setTimeout(
            function() {
                box5.play();
        },
        500);
    });
    $(".column.c6").on("click", function(){
        setTimeout(
            function() {
                box6.play();
        },
        500);
    });    
});

var play = {
    "all" : function(){
        document.getElementById("myNavs").style.height = "100vh";
        var player = videojs('my-playlist');
        player.playlist([   
            {
            sources: [{
                src: url_player1,
                type: 'video/mp4'
            }],
            poster: 'http://media.w3.org/2010/05/sintel/poster.png'
            }, {
            sources: [{
                src: url_player2,
                type: 'video/mp4'
            }],
            poster: 'http://media.w3.org/2010/05/bunny/poster.png'
            }, {
            sources: [{
                src: url_player3,
                type: 'video/mp4'
            }],
            poster: 'http://www.videojs.com/img/poster.jpg'
            }
        ]);
        // Play through the playlist automatically.
        // player.playlist.autoadvance(0);

    }
};

var box1 = {
    "play" : function() {
        document.getElementById("myNav1").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box1.pause();");
        player1 = videojs('my-player1', {
            autoplay: true,
            preload: 'auto',
            controls: true,
            fluid: true,
            loop: true,
            sources: [{
                src: url_player1,
                type: 'video/mp4'
            }]
        });
        return true;
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        player1.pause();
        return true;
    }
};

var box2 = {
    "play" : function() {
        document.getElementById("myNav2").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box2.pause();");
        player2 = videojs('my-player2', {
            autoplay: true,
            preload: 'auto',
            controls: true,
            fluid: true,
            loop: true,
            sources: [{
                src: url_player2,
                type: 'video/mp4'
            }]
        });
        return true;
    },
    "pause" : function() {
        document.getElementById("myNav2").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        player2.pause();
        return true;
    }
};

var box3 = {
    "play" : function() {
        document.getElementById("myNav3").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box3.pause();");
        player3 = videojs('my-player3', {
            autoplay: true,
            preload: 'auto',
            controls: true,
            fluid: true,
            loop: true,
            sources: [{
                src: url_player3,
                type: 'video/mp4'
            }]
        });
        return true;
    },
    "pause" : function() {
        document.getElementById("myNav3").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        player3.pause();
        return true;
    }
};

var box4 = {
    "play" : function() {
        document.getElementById("myNav4").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box4.pause();");
        player4 = videojs('my-player4', {
            autoplay: true,
            preload: 'auto',
            controls: true,
            fluid: true,
            loop: true,
            sources: [{
                src: url_player4,
                type: 'video/mp4'
            }]
        });
        return true;
    },
    "pause" : function() {
        document.getElementById("myNav4").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        player4.pause();
        return true;
    }
};

var box5 = {
    "play" : function() {
        document.getElementById("myNav5").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box5.pause();");
        player5 = videojs('my-player5', {
            autoplay: true,
            preload: 'auto',
            controls: true,
            fluid: true,
            loop: true,
            sources: [{
                src: url_player5,
                type: 'video/mp4'
            }]
        });
        return true;
    },
    "pause" : function() {
        document.getElementById("myNav5").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        player5.pause();
        return true;
    }
};

var box6 = {
    "play" : function() {
        document.getElementById("myNav6").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box6.pause();");
        player6 = videojs('my-player6', {
            autoplay: true,
            preload: 'auto',
            controls: true,
            fluid: true,
            loop: true,
            sources: [{
                src: url_player6,
                type: 'video/mp4'
            }]
        });
        return true;
    },
    "pause" : function() {
        document.getElementById("myNav6").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        player6.pause();
        return true;
    }
};
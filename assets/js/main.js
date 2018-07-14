var isPlaying = false;

var idleTime = 0;
var timeToAutoPlay = 6;
function timerIncrement() {
    idleTime = idleTime + 1;
    if (!isPlaying) {        
        if (idleTime == timeToAutoPlay) {
            console.log("iddle");
            document.getElementById("myNavPl").style.height = "100vh";
            $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
            $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
            $(".overlay a").css("display","none");
            $(".overlay.overlay-content").css("padding","20px;");
            $("#aBackButton").attr("onclick","box3.pause();").css("padding","30%");
            playList();
        }
    }

}
var playList = function() {
    var videos = [
        {
            src : [url_video1],
            preload: 'auto',
            fluid: true,
            loop: true,
            poster : '',
            title : 'Video 1'
        },
        {
            src : [url_video2],
            preload: 'auto',
            fluid: true,
            loop: true,
            poster : '',
            title : 'Video 2'
        }
    ];
    var player = videojs('main-playlist');
    player.playList(videos, {
        getVideoSource: function(vid, cb) {
            cb(vid.src, vid.poster, vid.loop);
        } 
    });
    player.play();
    isPlaying = true;
}

$(document).ready(function()
{
    var idleInterval = setInterval(timerIncrement, 2000); // 60000 = 1 minute

    $(".column.c1").on("click", function(){
        setTimeout(
            function() {
                box1.wakeup();
        },
        500);
    });
    $(".column.c2").on("click", function(){
        setTimeout(
            function() {
                box2.wakeup();
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
                box5.wakeup();
        },
        500);
    });
    $(".column.c6").on("click", function(){
        setTimeout(
            function() {
                box6.wakeup();
        },
        500);
    });
    $(".column.c7").on("click", function(){
        setTimeout(
            function() {
                box7.wakeup();
        },
        500);
    });
    $(".column.c8").on("click", function(){
        setTimeout(
            function() {
                box8.wakeup();
        },
        500);
    });
    $(".column.c9").on("click", function(){
        setTimeout(
            function() {
                box9.wakeup();
        },
        500);
    });
    $(".column.c10").on("click", function(){
        setTimeout(
            function() {
                box10.wakeup();
        },
        500);
    });
});

var players = {
    "play" : function(video_url){
        player1 = videojs('apps-video2', {
            preload: 'auto',
            controls: false,
            fluid: true,
            loop: true,
            sources: [{
                src: video_url,
                type: 'video/mp4'
            }]
        });
        if (!isPlaying) {
            player1.play();         
            isPlaying = true;
        }
        return true;
    },
    "pause" : function(){
        isPlaying = false;
        location.reload();
    }
}


/* HTML : Visi Misi */
var box1 = {
    "wakeup" : function(){
        document.getElementById("myNav_").style.height = "100vh";
        $.ajax({
            url: url_visimisi,
            method: 'get',
            dataType: 'html',
            beforeSend: (function(){
                $("#dvModalBox_").html("Loading...");
            })
        })
        .done(function (html) {
            $("#dvModalBox_").html(html);
        })
        .fail(function(xhr){
            console.log(xhr);
        });        
    },
    "sleep" : function(){
        document.getElementById("myNav_").style.height = "0%";
    }
};

/* HTML : Struktur Organisasi */
var box2 = {
    "wakeup" : function(){
        document.getElementById("myNav_").style.height = "100vh";
        $.ajax({
            url: url_struktur,
            method: 'get',
            dataType: 'html',
            beforeSend: (function(){
                $("#dvModalBox_").html("Loading...");
            })
        })
        .done(function (html) {
            $("#dvModalBox_").html(html);
        })
        .fail(function(xhr){
            console.log(xhr);
        });        
    },
    "sleep" : function(){
        document.getElementById("myNav_").style.height = "0%";
    }
};

/* Video : Slideshow Foto */
var box3 = {
    "play" : function() {
        document.getElementById("myNav2").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box3.pause();").css("padding","30%");
        players.play(url_video1);
    },
    "pause" : function() {
        document.getElementById("myNav2").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        players.pause();
        return true;
    }
};

/* Video : Profile */
var box4 = { 
    "play" : function(){
        document.getElementById("myNav2").style.height = "100vh";
        $(".footer").css("")
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box4.pause();").css("padding","30%");
        players.play(url_video2);
    },
    "pause" : function() {
        document.getElementById("myNav2").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        players.pause();
        return true;
    }
};

/* Link Website : Pemkab */
var box5 = {
    "wakeup" : function(){
        params  = 'width='+screen.width;
        params += ', height='+screen.height;
        params += ', fullscreen=yes';
        var myWindow = window.open("http://badungkab.go.id/index.php/home", "popupWindow", params);
        myWindow.onload = function(){
            this.alert("fdjsla");
        };
    },
    "sleep" : function(){
        myWindow.close();
    }
};

/* Link Website : PPID */
var box6 = {
    "wakeup" : function(){
        params  = 'width='+screen.width;
        params += ', height='+screen.height;
        params += ', fullscreen=yes';
        var myWindow = window.open("http://ppid.badungkab.go.id/", "popupWindow", params);
        myWindow.onload = function(){
            this.alert("fdjsla");
        };
    },
    "sleep" : function(){
        myWindow.close();
    }
};

/* Link Website : Diskominfo */
var box7 = {
    "wakeup" : function(){
        params  = 'width='+screen.width;
        params += ', height='+screen.height;
        params += ', fullscreen=yes';
        var myWindow = window.open("http://badungkab.go.id/instansi/diskominfo", "popupWindow", params);
        myWindow.onload = function(){
            this.alert("fdjsla");
        };
    },
    "sleep" : function(){
        myWindow.close();
    }
};

/* Link Website : CCTV */
var box8 = {
    "wakeup" : function(){
        params  = 'width='+screen.width;
        params += ', height='+screen.height;
        params += ', fullscreen=yes';
        var myWindow = window.open("https://www.google.com/maps/d/u/0/viewer?mid=1WcP1vFpwtl21VQepaijTGSGxSQiWV9tS&ll=-8.670767922083156%2C65.17994999999996&z=4", "popupWindow", params);
        myWindow.onload = function(){
            this.alert("fdjsla");
        };
    },
    "sleep" : function(){
        myWindow.close();
    }
};

/* Link Website : Wifi */
var box9 = {
    "wakeup" : function(){
        params  = 'width='+screen.width;
        params += ', height='+screen.height;
        params += ', fullscreen=yes';
        var myWindow = window.open("https://www.google.com/maps/d/u/0/viewer?mid=1FTmhK1eKBWywbsDgjNUCvBINJw0_5pMu&ll=-0.039728674071050664%2C83.49248550000002&z=3", "popupWindow", params);
        myWindow.onload = function(){
            this.alert("fdjsla");
        };
    },
    "sleep" : function(){
        myWindow.close();
    }
};

/* Link Website : Map Badung */
var box10 = {
    "wakeup" : function(){
        params  = 'width='+screen.width;
        params += ', height='+screen.height;
        params += ', fullscreen=yes';
        var myWindow = window.open("http://map.badungkab.go.id", "popupWindow", params);
        myWindow.onload = function(){
            this.alert("fdjsla");
        };
    },
    "sleep" : function(){
        myWindow.close();
    }
};
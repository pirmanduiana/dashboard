
$(document).ready(function(){

    $(".column.c1").on("click", function(){
        box1.wakeup();
    });
    $(".column.c2").on("click", function(){
        box2.play();
    });
    $(".column.c3").on("click", function(){
        box3.wakeup();
    });
    $(".column.c4").on("click", function(){
        box4.wakeup();
    });
    $(".column.c5").on("click", function(){
        box5.play();
    });
    $(".column.c6").on("click", function(){
        box6.wakeup();
    });
    $(".column.c7").on("click", function(){
        box7.wakeup();
    });
    $(".column.c8").on("click", function(){
        box8.wakeup();
    });

});

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

var box2 = {
    "play" : function() {
        document.getElementById("myNav2").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box2.pause();");
        var options = {};
        player2 = videojs('my-player2', options, function onPlayerReady() {            
            this.play();       
        });
        return true;
    },
    "pause" : function() {
        document.getElementById("myNav2").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","block");
        $(".overlay.overlay-content").css("padding","0px;");
        player2.pause();
        return true;
    }
};

var box3 = {
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

var box4 = {
    "wakeup" : function(){
        document.getElementById("myNav_").style.height = "100vh";
        $.ajax({
            url: url_badungkab,
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

var box5 = { 
    "play" : function(){
        document.getElementById("myNav5").style.height = "100vh";
        $(".footer").css("")
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box5.pause();");
        var options = {};
        player5 = videojs('my-player5', options, function onPlayerReady() {            
            this.play();       
        });
        return true;
    },
    "pause" : function() {
        document.getElementById("myNav5").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","block");
        $(".overlay.overlay-content").css("padding","0px;");
        player5.pause();
        return true;
    }
};

var box6 = {
    "wakeup" : function(){
        document.getElementById("myNav_").style.height = "100vh";
        $.ajax({
            url: url_kominfo,
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

var box7 = {
    "wakeup" : function(){
        document.getElementById("myNav_").style.height = "100vh";
        $.ajax({
            url: url_ppid,
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

var box8 = {
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
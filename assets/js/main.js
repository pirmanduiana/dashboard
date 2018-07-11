
$(document).ready(function(){

    $(".column.c1").on("click", function(){
        box1.wakeup();
    });
    $(".column.c2").on("click", function(){
        box2.wakeup();
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

var box2 = {};

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
        $(".main-btn-action").css("margin-bottom","100px").css("transition","0.3s");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        var options = {};
        var player = videojs('my-player', options, function onPlayerReady() {            
            this.play();       
        });
        return true;
    },
    "pause" : function() {
        document.getElementById("myNav5").style.height = "0%";
        $(".main-btn-action").css("margin-bottom","0").css("transition","0.3s");
        $(".overlay a").css("display","block");
        $(".overlay.overlay-content").css("padding","0px;");
        $(".video-js").each(function(key,item) {
            $(this)[key].player.pause();    
        });
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
        document.getElementById("myNav_").style.height = "100vh";
        $.ajax({
            url: url_badungmap,
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
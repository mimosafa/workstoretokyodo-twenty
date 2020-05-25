/**
 * ====================================================================================================
 * Top Page Scripts
 * ====================================================================================================
 */



/* ---------------------------------------------------------------
 * Variable
 * ------------------------------------------------------------ */

var sliderIdx;
var opFlag = false;



/* ---------------------------------------------------------------
 * Event Handler
 * ------------------------------------------------------------ */

/* -- DOM Load Event -- */
$(document).ready(function() {

});


/* -- Window Resize Event -- */
var topResizeTimer = false;

$(window).on("resize", function() {
    if(topResizeTimer !== false) {
        clearTimeout(topResizeTimer);
    }
    topResizeTimer = setTimeout(function() {
        if(_winW <= 896 && _myMedia !== "sp") {
            init();
        } else if(_winW > 896 && _myMedia !== "pc") {
            init();
        }
        
        setMvH();

    }, 200);
});


/* -- Window Load Event -- */
$(window).on("load", function() {
    $("html,body").animate({ scrollTop: 0 }, 1);
    init();
    setOp();
    setMvH();
    setMv();
})



/* ---------------------------------------------------------------
 * Functions
 * ------------------------------------------------------------ */

/* -- Initialize -- */
function init() {
    $(".top_mv_brand > li").css({"z-index": 4});
    $(".top_mv_brand > li a").removeClass("active");
    $(".top_mv_brand > li .top_mv_brand_feature_lists").css("height", "auto").hide();
    $(".top_mv_brand > li .top_mv_brand_btn_close_sp").hide();
    
    if(_myMedia === "pc") {
        $(".top_mv_brand > li").css({"width": 25 + "%", "height": 100 + "%"});
        $(".top_mv_brand > li .cnt_btn").show();
    } else if(_myMedia === "sp") {
        $(".top_mv_brand > li").css({"width": 50 + "%", "height": 50 + "%"});
        $(".top_mv_brand > li .cnt_btn").hide();
        $(".top_mv_brand > li .top_mv_brand_btn_open_sp").show();
    }
}


/* -- Set Opening -- */
function setOp() {
    $("#op > div").fadeIn(1500, "easeInCubic", function() {
        $("#op").delay(1000).fadeOut(1000);
        var delay = 1500;
        $(".top_mv_brand > li").each(function(idx) {
            $(this).delay(delay).animate({"margin-top": 0, "margin-bottom": 0, "opacity": 1}, 500, "easeOutCubic", function() {
                if(idx >= $(".top_mv_brand > li").length - 1) {
                    $("html, body").addClass("active");
                    opFlag = true;
                }
            });
            delay += 250;
        });
    });
}


/* -- Set Main Visual Height -- */
function setMvH() {
    var mvH = _winH - $(".header_gnav").outerHeight() ;
    $("#top_mv").css("height", mvH);
}

function setMv() {
    $(".top_mv_img_default").each(function() {
        var src = $(this).find("img").attr("src");
        $(this).css("background-image", "url(" + src + ")");
    });
    
    $(".top_mv_brand > li").hover(
        function() {
            if(!opFlag) { return; }
            
            if(_myMedia === "pc") {
                $(this).find(".bg_img li").removeClass("active");
                $(this).find(".top_mv_img_default").fadeOut(250);
                sliderIdx = $(this).index();
                $(this).find(".top_mv_brand_feature_lists").stop().slideDown(350);
                _sliderArr[sliderIdx].startAuto();
                $(this).find(".bg_img li").addClass("active");
            }
        },
        function() {
            if(!opFlag) { return; }
            
            if(_myMedia === "pc") {
                $(this).find(".top_mv_img_default").fadeIn(250, function(){
                    $(this).find(".bg_img li").removeClass("active");
                });
                sliderIdx = $(this).index();
                $(this).find(".top_mv_brand_feature_lists").stop().slideUp(350);
                _sliderArr[sliderIdx].stopAuto();
            }
        }
    );
    
    $(".top_mv_brand > li").on("click", function() {
        if(!opFlag) { return false; }
        
        if(_myMedia === "sp") {
            $("html,body").animate({ scrollTop: 0 }, 1);
            $(this).find(".top_mv_img_default").fadeOut(250);  
            sliderIdx = $(this).index();
            $(".top_mv_brand > li").css("z-index", 4);
            $(this).css("z-index", 5);
            $(this).find(".top_mv_brand_btn_open_sp").hide();
            $(this).stop().animate({"width": $("#top_mv").width(), "height": $("#top_mv").height()}, 350, function() {
                $(this).find("a").addClass("active");
                $(this).find(".top_mv_brand_btn_close_sp").fadeIn(350);
                $(this).find(".top_mv_brand_feature_lists").stop().slideDown(350);
                $(this).find(".cnt_btn").stop().fadeIn(350); 
                _sliderArr[sliderIdx].startAuto();
                $(this).find(".bg_img li").addClass("active");
            });
            
            if(!$(this).find("a").hasClass("active")) {
                return false;
            }
        }
    });
    
    $(".top_mv_brand > li .top_mv_brand_btn_close_sp").on("click", function(e) {
        if(_myMedia === "sp") {
            $(this).parent().find(".top_mv_img_default").fadeIn(250);
            $(this).parent().find("a").removeClass("active");
            $(this).parent().find(".top_mv_brand_btn_sp").hide();
            $(this).parent().find(".top_mv_brand_feature_lists").hide();
            $(this).parent().find(".cnt_btn").hide();
            $(this).parent("li").stop().animate({"width": 50 + "%", "height": 50 + "%"}, 350, function() {
                $(this).parent().find(".top_mv_brand_btn_open_sp").fadeIn(350);
                $(this).parent("li").css({"z-index": 4});
                $(this).find(".bg_img li").removeClass("active");
                _sliderArr[sliderIdx].stopAuto();
            });
            
            e.stopPropagation();
        }
    });
}



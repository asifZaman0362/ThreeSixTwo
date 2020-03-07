var isScrolling = false;
var isShrunk = false;
var lastScroll = 0;

$(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 10 && $(this).scrollTop() > lastScroll) {
            scrollDown();
        }
        else if ($(this).scrollTop() <= 0 && $(this).scrollTop() <= lastScroll) {
            scrollUp();
        }
        lastScroll = $(this).scrollTop();
    });
});

function scrollDown() {
    if (isShrunk || isScrolling) return;
    else {
        isShrunk = true;
        isScrolling = true;
        console.log("scrollDown called.");
        document.getElementsByClassName("static")[0].classList.replace("static", "sticky");
        setTimeout(resetScroll, 2000);
    }
}

function scrollUp() {
    if (!isShrunk || isScrolling) return;
    else {
        isShrunk = false;
        isScrolling = true;
        console.log("scrollUp called.");
        document.getElementsByClassName("sticky")[0].classList.replace("sticky", "static");
        setTimeout(resetScroll, 2000);
    }
}

function resetScroll() {
    isScrolling = false;
    console.log("aint scroll no mo playa!");
}
var isScrolling = false;
var isShrunk = false;
var lastScroll = 0;

// $(function(){
//     $(window).scroll(function(){
//         if($(this).scrollTop() > 10 && $(this).scrollTop() > lastScroll) {
//             scrollDown();
//         }
//         else if ($(this).scrollTop() <= 0 && $(this).scrollTop() <= lastScroll) {
//             scrollUp();
//         }
//         lastScroll = $(this).scrollTop();
//     });
// });

var body = document.getElementById("body");
body.style.overflow = "hidden";

function scrollDown() {
    if (isShrunk || isScrolling) return;
    else {
        isShrunk = true;
        isScrolling = true;
        document.getElementsByClassName("static")[0].classList.replace("static", "sticky");
        body.style.overflow = "auto";
        setTimeout(resetScroll, 2000);
    }
}

function scrollUp() {
    if (!isShrunk || isScrolling) return;
    else {
        isShrunk = false;
        isScrolling = true;
        body.style.overflow = "hidden";
        scrollTo(0, 0);
        document.getElementsByClassName("sticky")[0].classList.replace("sticky", "static");
        setTimeout(resetScroll, 2000);
    }
}

function resetScroll() {
    isScrolling = false;
    console.log("aint scroll no mo playa!");
}
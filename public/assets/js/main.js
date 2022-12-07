$(".side-toggler").click(() => {
    $(".sidebar").toggleClass("hidden");
    console.log("clicked");
});

$(window)
    .resize(function () {
        if ($(window).width() > 1024) {
            $(".sidebar").removeClass("hidden");
        }
    })
    .resize();

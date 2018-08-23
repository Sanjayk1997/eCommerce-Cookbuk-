$(document).ready(function(){
    $("#myCarousel").carousel();

    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });

    $(".carousel-control-prev").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".carousel-control-next").click(function(){
        $("#myCarousel").carousel("next");
    });
});

$(document).ready(function() {
    $(".table").hide();
});

$(".btn").click(function(){
    $(".table").toggle();
});

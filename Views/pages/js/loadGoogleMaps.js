$(window).on("scroll", function(){
    let element       = $(".depoimentos");
    let element_heigh = element.height();
    let window_heigh  = window.innerHeight;
    let window_scroll = $(this).scrollTop();
    let element_top   = element.offset().top;
    let distance      = element_top - window_scroll - window_heigh;

    if(distance <= -element_heigh){
        $(this).off("scroll");
        let iframe = $("#google-maps")[0];
        let url    = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.4068796012184!2d-38.67588596620637!3d-13.03799720544944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x715ff8d6081d23f%3A0xb31493fe00d3bbc0!2sVillage%20Las%20Brisas!5e0!3m2!1spt-BR!2sbr!4v1568762940324!5m2!1spt-BR!2sbr";
        iframe.src = url;
    }
});

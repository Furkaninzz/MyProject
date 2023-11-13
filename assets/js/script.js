var prevScrollpos = $(window).scrollTop();
var navbarHeight = $(".navbar").outerHeight();

$(window).on('scroll', function() {
    var currentScrollPos = $(window).scrollTop();
    
    if (prevScrollpos > currentScrollPos) {
        // Yukarı kaydırıldığında navbar'ı göster
        $(".navbar").stop().animate({ top: "0" }, 200); // 300 milisaniyede animasyon
    } else {
        // Aşağı kaydırıldığında navbar'ı gizle
        $(".navbar").stop().animate({ top: "-" + navbarHeight + "px" }, 200); // 300 milisaniyede animasyon
    }
    
    prevScrollpos = currentScrollPos;
});
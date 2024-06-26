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

document.addEventListener('DOMContentLoaded', function() {
    // Preloader'ı 2 saniye boyunca görünür tut, ardından gizle
    setTimeout(function() {
        var preloader = document.querySelector('.preloader');
        preloader.style.opacity = '0';
        setTimeout(function() {
            preloader.style.display = 'none';
            var content = document.querySelector('.content');
            content.style.opacity = '1';
            content.style.display = 'block';
        }, 1000);
    }, 1000);
});

// ---- ---- Const ---- ---- //
let inputBox = document.querySelector('.input-box'),
  searchIcon = document.querySelector('.search'),
  closeIcon = document.querySelector('.close-icon');

// ---- ---- Open Input ---- ---- //
searchIcon.addEventListener('click', () => {
  inputBox.classList.add('open');
});
// ---- ---- Close Input ---- ---- //
closeIcon.addEventListener('click', () => {
  inputBox.classList.remove('open');
});

function changeColor() {
  var swBox = document.getElementById("sw_input");
  if (swBox.checked == true){
    document.body.style.backgroundColor = "#000";
  } else {
    document.body.style.backgroundColor = "#fff";
  }
}
$("#loginBtn").click(function (e) { 
  e.preventDefault();
  var username = $("#username").value;
  var password = $("#password").value;
  $.ajax({
    type: "post",
    url: "ajaxlogin.php",
    data: username, password,
    dataType: "JSON",
    success: function (response) {
      
    }
  });
  
});
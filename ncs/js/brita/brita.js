window.onload=function(){
    // 선택자, 매서드, 이벤트(안맞으면 안터짐, 모든실행문이 이안에서 터짐)
    // 제이쿼리 안먹힐때 순수 자바스크립트의 레디 이벤트로 써야함
}


$(document).ready(function(){

    var swiperEvent = new Swiper(".event-mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        pagination: {
          el: ".event-mySwiper .swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".event-mySwiper .swiper-button-next",
          prevEl: ".event-mySwiper .swiper-button-prev",
        },
      });

      var swiperBn = new Swiper("#bn .mySwiper", {
        spaceBetween: 0,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: "#bn .swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: "#bn .swiper-button-next",
          prevEl: "#bn .swiper-button-prev",
        },
      });


    $('.gnb_1da').click(function(e){
      e.preventDefault();
      $('body, html').animate({scrollTop : $($(this).attr('href')).offset().top })
    })

    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".mySwiper .pagebutton",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
    });

})



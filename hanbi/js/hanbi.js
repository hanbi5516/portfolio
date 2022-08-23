window.onload=function(){
    // 선택자, 매서드, 이벤트(안맞으면 안터짐, 모든실행문이 이안에서 터짐)
    // 제이쿼리 안먹힐때 순수 자바스크립트의 레디 이벤트로 써야함
}

$(document).ready(function(){
    AOS.init(); // 실행식은 단순하게 실행의 
    $('#allMenu').click(function(){
        $(this).toggleClass('open');
    })

    $('#gnb a').click(function(e){
        e.preventDefault();

        var clicka = $(this); // 저장하기 클릭할때마다 새롭게 저장하게끔 한거임
        
        
      

        $('body, html').animate({
            scrollTop : $(clicka.attr('href')).offset().top
        },400,function(){
            $('#gnb a').removeClass('act')
            clicka.addClass('act'); // 1클릭a랑 2클릭a랑 3클릭a가 같은애고 변수로 준거임

        }) // 어떤버튼을 눌러서 켜지는지 활성화 하는거
            // 오프셋 = 바디태그 내에서 탑위치가 어딨는지 찾아내는 기능
            // 높이가 어떻게 될지 모르기 때문에 topbottom은 없음 모름 right도 없음
            // 지금 상태는 모든 a를 클릭할때 상단위치로 감 #event가 변수임
            // 이동할때 부드럽게 내려가게 만드는거
            // 아래 펑션의 this는 바디와 html이 됨
    })


})

$(document).ready(function(){

    const swiper = new Swiper('#portfolio .swiper', {
        // Optional parameters 클래스명이 스와이퍼로 되있으면 슬라이드가 같이 돌아감
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
        // loop: true,
    
        // If we need pagination
        pagination: {
        el: '#portfolio .swiper-pagination',
        },
    
        // Navigation arrows
        navigation: {
        nextEl: '#portfolio .swiper-button-next',
        prevEl: '#portfolio .swiper-button-prev',
        },
    });

})




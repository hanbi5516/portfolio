<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>



    <div id="bn">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bn1"></div>
                <div class="swiper-slide bn2"></div>
                <div class="swiper-slide bn3"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination bnbutton"></div>
        </div>
    </div>

    <div id="bnbottom" class="mb-5">
        <div class="product mb-5 d-flex justify-content-evenly align-items-center py-3 py-md-0 text-md-start">
            <div class="producthead d-flex flex-column">
                <h5>제품등록</h5>
                <h6>* 정품등록시 500포인트를 적립해드려요!</h6>
            </div>
            <div>
                <ul class="productext d-md-flex mb-0">
                    <li class="mr-md-5 pr-1">
                        <input type='text' placeholder='제품코드를 적어주세요.'>
                        <i class="fa-solid fa-magnifying-glass text-white"></i>
                        <!-- <img class="search" src="/ncs/img/britaproject_img/search.svg" alt="검색"> -->
                    </li>
                    <li class="ml-md-5 pl-1">
                        <input type='text' placeholder='제품코드를 적어주세요.'>
                        <i class="fa-solid fa-magnifying-glass text-white"></i>
                        <!-- <img class="search" src="/ncs/img/britaproject_img/search.svg" alt="검색"> -->
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <section id="Asec" class="container py-5">
        <h3>브리타 효과</h3> 
        
        <div class="effect d-lg-flex justify-content-lg-between align-items-lg-center">
            <div class="youtubeBox col-lg-6 mb-5">
                <div>
                    <iframe
                    width="100%"  src="https://www.youtube.com/embed/_GFqZ4jwgRA?start=3?autoplay=1&mute=1"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                    </iframe>
                </div>
           </div>
            <div class="britaeffect text-center col-lg-5 my-4 mt-lg-0">
                <h4>안전, 위생, 편리, 가격까지</h4>
                <p class="mb-0">막스트라 플러스 필터로 보이지 않는 불순물을 걸러<br>
                    물 맛까지 살리는 브리타. 이젠 집에서 손 쉽게<br>
                    깨끗하고 맛있는 물을 마셔보세요!</p>
            </div>
        </div>
        
        
    </section>
    <section id="Bsec" class="mx-0 py-4">
        <div class="event mb-md-5 pb-md-5">
            <h3>이벤트</h3>
            <div class="swiper event-mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide firstevent" >

                    </div>
                    <div class="swiper-slide secondevent" >
                   
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination bnbutton"></div>
            </div>
        </div>
    </section>

    <section id="Csec" class="py-4 col-8 m-auto col-md-12 ">
        <h3>고객찐리뷰</h3>
        <div class="rt row justify-content-center pt-5">
            <div class="re col-lg col-md-8 mx-md-auto text-lg-left mb-5 mb-lg-0">
                <a href="" class='d-block  text-center '><img src="/ncs/img/britaproject_img/review1.jpg" alt=""></a>
                <div class="re_img d-flex justify-content-between align-items-center">
                    <p class="mb-0">best review</p>
                    <div>
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    </div>
                </div>
                
                <p class="text-left mb-0 pt-3">드디어 입문한 브리타 플로우! 냉장고에 쏙 들어가는 크기라 자리를 많이 차지하지도 않고 시원하게 마실 수 있어서 대만족입니다ㅠㅠ!
                </p>
            </div>
            <div class="re col-lg col-md-6  mb-5 mb-lg-0">
                <a href="#none" class='d-block  text-center '><img src="/ncs/img/britaproject_img/review2.jpg" alt=""></a>
                <div class="re_img d-flex justify-content-between align-items-center">
                    <p class="mb-0">best review</p>
                    <div>
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    </div>
                </div>
                <p class="mb-0 pt-3">물맛이 너무 좋아서 재구매하러 왔습니다 ~ 보관도 용이하고 플라스틱도 눈에 띄게 줄어서 제로 웨이스트 참여하는 기분이라 보람차고 좋아요!
                </p>
            </div>
            <div class="re col-lg col-md-6  mb-5 mb-lg-0">
                <a href="" class='d-block  text-center '><img src="/ncs/img/britaproject_img/review3.jpg" alt=""></a>
                <div class="re_img d-flex justify-content-between align-items-center">
                    <p class="mb-0">real review</p>
                    <div>
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    </div>
                </div>
                <p class="mb-0 pt-3">친정엄마 집에 하나 사드렸어요~ 고양이를 키우시는데 자꾸 버튼을 눌러서 물바다가 되는게 고민이라고 하셔서 이번에 큰맘먹고 바꿔드렸어요~ㅎㅎ
                </p>
            </div>
            <div class="re col-lg col-md-6  mb-5 mb-lg-0">
                <a href="" class='d-block  text-center'><img src="/ncs/img/britaproject_img/review4.jpg" alt=""></a>
                
                <div class="re_img d-flex justify-content-between align-items-center">
                    <p class="mb-0">real review</p>
                    <div>
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    </div>
                </div>
                <p class="mb-0 pt-3">사무실에 놓을겸 대용량으로 구매해서 사용중입니다 직원들도 만족하고 있고 생각보다 필터를 자주갈지 않아도 되고 유튜브에 나와있는대로 따라하는데
                </p>
            </div>
            <div class="re col-lg col-md-6  mb-5 mb-lg-0">
                <a href=""  class='d-block  text-center '><img src="/ncs/img/britaproject_img/review5.jpg" alt=""></a>
                <div class="re_img d-flex justify-content-between align-items-center">
                <p class="mb-0">real review</p>
                    <div>
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    </div>
                </div>
                <p class="mb-0 pt-3">별명이 하마인 저는 브리타 플로우를 구매해 보았어요! 부엌 자리도 크게 차지 안하고 원하는 만큼 시원하게 마실 수 있다는게 큰 장점이에요
                </p>
            </div>
        </div>
    </section>

    <section id="Dsec" class="py-4">
        <div id="box">
            <div id="notice">
                <div class="noticetext d-flex flex-column justify-content-evenly align-items-center my-3">
                    <h3 class="mt-5 mb-3">브리타 뉴스레터 구독</h3>
                    <h5>특별 프로모션과 최신뉴스를 한번에 받아보세요 !</h5>
                </div>
                <form action="" class="d-flex flex-column justify-content-evenly align-items-center">
                    <ul class="my-5">
                        <li class="noticename">
                            <strong>성별</strong>
                            <div class="check">
                                <input type="checkbox" id="man">
                                <label for="man" class="mx-2">남성</label>
                                <input type="checkbox" id="famle">
                                <label for="famle" class="mx-2">여성</label>
                                <input type="checkbox" id="no">
                                <label for="no" class="mx-2">표시하고싶지 않음</label>
                            </div>
                        </li>
                        <li class="noticename">
                            <strong>연령</strong>
                            <div class="check">
                                <input type="checkbox" id="age1">
                                <label for="age1" class="mx-2">20대</label>
                                <input type="checkbox" id="age2">
                                <label for="age2" class="mx-2">30대</label>
                                <input type="checkbox" id="age3">
                                <label for="age3" class="mx-2">40대</label>
                                <input type="checkbox" id="age4">
                                <label for="age4" class="mx-2">50대</label>
                            </div>
                        </li>
                        <li class="noticename">
                            <strong>이름</strong>
                            <div class="check"><input type="text"></div>
                        </li>
                        <li class="noticename">
                            <strong>이메일</strong>
                            <div class="check"><input type="text"></div>
                        </li>
                    </ul>
                </form>
            </div>
            <div id="noticetext" class="d-flex flex-column align-items-center">
                <ul>
                    <li>
                        <input type="checkbox">
                        <label class="my-4 mx-2">본인은 BRITA Korea Co., Ltd.가 브리타 제품 및 서비스 (정수 필터 시스템, 정수 디스펜서 부속품 및 서비스)에 대한 맞춤형 정보, 제안, 특별 프로모션<br>
                            에 대해 이메일로 연락할 수 있음에 동의합니다.* </label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label class="my-4 mx-2">본인은 BRITA Korea Co., Ltd.가 브리타 제품 및 서비스(정수 필터 시스템, 정수 디스펜서 부속품 및 서비스) 맞춤형 정보, 제안, 특별 프로모션이 포함<br>
                            된 이메일을 보내기 위해 본인의 호칭, 이름, 이메일 주소, 거주 국가를 수집 및 처리할 수 있음에 동의합니다. 본인은 언제든지 동의 의사를 철회할 수 있<br>
                            습니다. 동의가 철회될 때까지 데이터가 보관됩니다. 본인은 동의를 거부할 권리가 있으며 거부 시 상기 이메일 전송은 거부되거나 제한됩니다.</label>
                    </li>
                </ul>
                <input class="send d-flex align-items-center" type='submit' value='보내기'>
            </div>
        </div>
    </section>

    <section id="Esec" class="py-4 container-lg mx-auto">
        <h3>판매처찾기</h3>
        <div class="box d-md-flex justify-content-md-center my-md-5">
            <div class="inbox mr-md-5 px-md-2">
                <input id="member_post" class="search_t_1" type="text" placeholder='검색으로 찾기' readonly onclick="findAddr()">
                <i class="fas fa-caret-down text-white"></i>
            </div>
            <div class="inbox ml-md-5 px-md-2">
                <input class="search_t_2" type="text" placeholder='매장, 도로명, 동명을 검색해주세요.'>
                <i class="fa-solid fa-lg fa-magnifying-glass text-white"></i>
            </div>
        </div>
        
        <div id="mapSection" class="map d-lg-flex justify-content-between  ">
            

            
            <!--카카오톡 API 키 :  f423ad49145ddb6fa43ae59b013fe7fd 
        f423ad49145ddb6fa43ae59b013fe7fd-->
            <!--37.5279366, 126.9690829
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
            -->
           
            <div id="map" class="col-lg-7 px-0"></div>

            <div class="area col-lg-5 pl-lg-5 pr-lg-0">
                <ul class="my-md-5">
                    <li class="area_text justify-content-between w-100">
                        <a href="#none"   onclick='mapKakaoload(37.5277242,126.9689913, "용산점")'>용산점</a>
                        <strong class='ml-3'>new open!</strong>
                        <span class='ml-auto'><a href="https://place.map.kakao.com/1902537591" target="_blank">서울 용산구 한강대로30길 25</a></span>
                    </li>
                    <li class="area_text justify-content-between w-100">
                        <a href="#none"   onclick='mapKakaoload(37.5169329,127.0226927, "가로수길점")'>가로수길점</a>
                        <strong class='ml-3'>new open!</strong>
                        <span class='ml-auto'><a href="https://place.map.kakao.com/10135149" target="_blank">서울 강남구 도산대로 128</a></span>
                    </li>
                    <li class="area_text justify-content-between w-100">
                        <a href="#none" onclick='mapKakaoload(37.5101935,127.0585824, "강남점")' >강남점</a>
                        <span><a href="https://place.map.kakao.com/7877178" target="_blank">서울 강남구 영동대로 513</a></span>
                    </li>
                    <li class="area_text justify-content-between w-100">
                        <a href="#none"  onclick='mapKakaoload(37.5126229,127.1016264, "송파점")' data-x='' data-y=''>송파점</a>
                        <span><a href="https://place.map.kakao.com/25975699" target="_blank">서울 송파구 올림픽로 300</a></span>
                    </li>
                </ul>
            </div>

            <div class="pagebutton text-center"></div>
           

        </div>
        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=69039600d1490a5378469fe914d31242"></script>
        <!-- &libraries=services,clusterer,drawing -->
        <script>
    mapKakaoload(37.5277242,126.9689913,'용산점')
    function mapKakaoload(a,b, c){
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
        mapOption = { 
            center: new kakao.maps.LatLng(a, b), // 지도의 중심좌표
            level: 3 // 지도의 확대 레벨
        };

    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

    var iwContent = '<div id="mapTextdiv" style="text-align:center">'+c+'</div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
        iwPosition = new kakao.maps.LatLng(a, b), //인포윈도우 표시 위치입니다
        iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

    // 인포윈도우를 생성하고 지도에 표시합니다
    var infowindow = new kakao.maps.InfoWindow({
        map: map, // 인포윈도우가 표시될 지도
        position : iwPosition, 
        content : iwContent,
        removable : iwRemoveable
    });
    }

   
       
        </script>

     
        </div>
        
    </section>




<?php
include_once(G5_THEME_PATH.'/tail.php');
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
        <div class="event">
            <h3>이벤트</h3>
            <div class="swiper event-mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="/ncs/img/britaproject_img/firstevent_test.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="/ncs/img/britaproject_img/secondevent_test.png" alt=""></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="Csec" class="py-4">
        <h3>고객찐리뷰</h3>
        <div class="rt row justify-content-center pt-5">
            <div class="re col-lg col-md-8 mx-md-auto text-center text-lg-left mb-5 mb-lg-0">
                <a href=""><img src="/ncs/img/britaproject_img/review1.jpg" alt=""></a>
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
            <div class="re col-lg col-md-6">
                <a href="#none"><img src="/ncs/img/britaproject_img/review2.jpg" alt=""></a>
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
            <div class="re col-lg col-md-6">
                <a href=""><img src="/ncs/img/britaproject_img/review3.jpg" alt=""></a>
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
            <div class="re col-lg col-md-6">
                <a href=""><img src="/ncs/img/britaproject_img/review4.jpg" alt=""></a>
                
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
            <div class="re col-lg col-md-6">
                <a href=""><img src="/ncs/img/britaproject_img/review5.jpg" alt=""></a>
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

    <section id="Esec" class="py-4">
        <h3>판매처찾기</h3>
        <div class="box d-md-flex justify-content-md-center my-md-5">
            <div class="inbox mr-md-5 px-md-2">
                <input class="search_t_1" type="text" placeholder='검색으로 찾기'>
                <i class="fas fa-caret-down text-white"></i>
            </div>
            <div class="inbox ml-md-5 px-md-2">
                <input class="search_t_2" type="text" placeholder='매장, 도로명, 동명을 검색해주세요.'>
                <i class="fa-solid fa-lg fa-magnifying-glass text-white"></i>
            </div>
        </div>
        <div id="map" class="map row justify-content-center">
            <!-- * 카카오맵 - 지도퍼가기 -->
            <!-- 1. 지도 노드 -->
            <div id="daumRoughmapContainer1660707882513" class="root_daum_roughmap root_daum_roughmap_landing"></div>

            <!--
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
            -->
            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

            <!-- 3. 실행 스크립트 -->
            <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp" : "1660707882513",
                    "key" : "2bebm",
                }).render();
            </script>

            <div class="area">
                <ul class="my-md-5">
                    <li class="area_text px-3">
                        <a href="https://place.map.kakao.com/1902537591" target="_blank">용산점</a>
                        <strong>new open!</strong>
                        <span>서울 용산구 한강대로30길 25</span>
                    </li>
                    <li class="area_text px-3">
                        <a href="https://place.map.kakao.com/10135149" target="_blank">가로수길점</a>
                        <strong>new open!</strong>
                        <span>서울 강남구 도산대로 128</span>
                    </li>
                    <li class="area_text px-3">
                        <a href="https://place.map.kakao.com/7877178" target="_blank">강남점</a>
                        <span>서울 강남구 영동대로 513</span>
                    </li>
                    <li class="area_text px-3">
                        <a href="https://place.map.kakao.com/25975699" target="_blank">송파점</a>
                        <span>서울 송파구 올림픽로 300</span>
                    </li>
                </ul>
            </div>

            <div class="pagebutton text-center"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>




<?php
include_once(G5_THEME_PATH.'/tail.php');
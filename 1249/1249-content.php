<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <div class="type-1249">
        <div class="container">

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h4 class="quote-summary ">Tucked xuống một làn đường nhỏ, nó không phải là dễ tìm, nhưng giá trị một thử nghiêm trọng! Thức ăn là nổi bật: Tôi bắt đầu với một đĩa cá sống, hoàn toàn tươi và ngon.
                    </h4>
                        <div class="quote-title-wrapper clearfix">
                            <div class="quote-title">
                                <section class='rating-widget'>
                                    <div class='rating-stars text-center'>
                                        <ul id='stars'>
                                            <li class='star' data-value='1'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' data-value='2'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' data-value='3'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' data-value='4'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' data-value='5'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <span class="the-title">  — SEVERINAN</span>
                                </section>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <h4 class="quote-summary "> 
                            Nơi này rất nhỏ, cách xa đám đông và thức ăn rất ngon! Và rất nhanh chóng và loại dịch vụ.
                        </h4>
                            <div class="quote-title-wrapper clearfix">
                                <div class="quote-title">
                                    <section class='rating-widget'>
                                        <div class='rating-stars text-center'>
                                            <ul id='stars'>
                                                <li class='star' data-value='1'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' data-value='2'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' data-value='3'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' data-value='4'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' data-value='5'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <span class="the-title"> — NSIGHTCREATIVOS</span>
                                    </section>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <h4 class="quote-summary ">
                                Nhà hàng là nơi tuyệt vời để thư giãn và thưởng thức những bữa ăn ngon đặc biệt là hải sản. Dịch vụ là hoàn hảo, tốt nhất ở Ý, chúng tôi đã có cho đến nay - chúng tôi không thể bất cứ điều gì lỗi.
                            </h4>
                                <div class="quote-title-wrapper clearfix">
                                    <div class="quote-title">
                                        <section class='rating-widget'>
                                            <div class='rating-stars text-center'>
                                                <ul id='stars'>
                                                    <li class='star' data-value='1'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' data-value='2'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' data-value='3'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' data-value='4'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' data-value='5'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <span class="the-title"> — PHILIPSTANCIL</span>
                                        </section>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <h4 class="quote-summary ">
                                    Thức ăn ngon, bầu không khí đẹp và cả dịch vụ thân thiện và có thẩm quyền - chỉ hoàn hảo. Chúng tôi chắc chắn sẽ quay trở lại.
                                </h4>
                                    <div class="quote-title-wrapper clearfix">
                                        <div class="quote-title">
                                            <section class='rating-widget'>
                                                <div class='rating-stars text-center'>
                                                    <ul id='stars'>
                                                        <li class='star' data-value='1'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' data-value='2'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' data-value='3'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' data-value='4'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' data-value='5'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <span class="the-title"> — GIOVANNIMISSAGLIA</span>
                                            </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <h4 class="quote-summary ">
                                        Bữa ăn chúng tôi có tại Antico Giardinetto là hoàn hảo trong hầu hết mọi cách. Nó nép mình trong một con hẻm nhỏ ngoài con đường mòn.
                                    </h4>
                                        <div class="quote-title-wrapper clearfix">
                                            <div class="quote-title">
                                                <section class='rating-widget'>
                                                    <div class='rating-stars text-center'>
                                                        <ul id='stars'>
                                                            <li class='star' data-value='1'>
                                                                <i class='fa fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' data-value='2'>
                                                                <i class='fa fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' data-value='3'>
                                                                <i class='fa fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' data-value='4'>
                                                                <i class='fa fa-star fa-fw'></i>
                                                            </li>
                                                            <li class='star' data-value='5'>
                                                                <i class='fa fa-star fa-fw'></i>
                                                            </li>
                                                            <span class="the-title">  — DAVIDDUNLOP</span>
                                                </section>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <h4 class="quote-summary ">
                                            Chúng tôi ở Venice một tuần và làm một số nghiên cứu về một nhà hàng địa phương gần căn hộ của chúng tôi. Thật là một điều này.
                                        </h4>
                                            <div class="quote-title-wrapper clearfix">
                                                <div class="quote-title">
                                                    <section class='rating-widget'>
                                                        <div class='rating-stars text-center'>
                                                            <ul id='stars'>
                                                                <li class='star' data-value='1'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' data-value='2'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' data-value='3'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' data-value='4'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' data-value='5'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <span class="the-title"> — JACKIEADAMS777</span>
                                                    </section>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <h4 class="quote-summary ">
                                                Thức ăn tuyệt vời và dịch vụ là tốt nhất mà chúng tôi đã trải nghiệm ở Venice cho đến nay. Chúng tôi chắc chắn sẽ quay lại để thử thêm các món ăn!
                                            </h4>
                                                <div class="quote-title-wrapper clearfix">
                                                    <div class="quote-title">
                                                        <section class='rating-widget'>
                                                            <div class='rating-stars text-center'>
                                                                <ul id='stars'>
                                                                    <li class='star' data-value='1'>
                                                                        <i class='fa fa-star fa-fw'></i>
                                                                    </li>
                                                                    <li class='star' data-value='2'>
                                                                        <i class='fa fa-star fa-fw'></i>
                                                                    </li>
                                                                    <li class='star' data-value='3'>
                                                                        <i class='fa fa-star fa-fw'></i>
                                                                    </li>
                                                                    <li class='star' data-value='4'>
                                                                        <i class='fa fa-star fa-fw'></i>
                                                                    </li>
                                                                    <li class='star' data-value='5'>
                                                                        <i class='fa fa-star fa-fw'></i>
                                                                    </li>
                                                                    <span class="the-title">  — KAMENMETAR</span>
                                                        </section>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <h4 class="quote-summary ">
                                                    Đây là lần đánh giá đầu tiên của tôi bởi vì thức ăn tuyệt vời đến nỗi chúng tôi thực sự đề nghị đưa đầu bếp đến Dubai! Bạn phải thử nhà hàng này! Đó là tưới nước.        </h4>
                                                    <div class="quote-title-wrapper clearfix">
                                                        <div class="quote-title">
                                                            <section class='rating-widget'>
                                                                <div class='rating-stars text-center'>
                                                                    <ul id='stars'>
                                                                        <li class='star' data-value='1'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                        <li class='star' data-value='2'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                        <li class='star' data-value='3'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                        <li class='star' data-value='4'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                        <li class='star' data-value='5'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                        <span class="the-title"> — DGCVISUAL</span>
                                                            </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <h4 class="quote-summary ">

                                                        Khách sạn của chúng tôi đã khiến chúng tôi đặt chỗ cho lễ kỷ niệm của chúng tôi, vì vậy chúng tôi đã ngồi trong căn phòng nhỏ hơn, thân mật hơn, rất đẹp. Dịch vụ rất tuyệt vời và đó là thức ăn của chúng tôi.
                                                    </h4>
                                                        <div class="quote-title-wrapper clearfix">
                                                            <div class="quote-title">
                                                                <section class='rating-widget'>
                                                                    <div class='rating-stars text-center'>
                                                                        <ul id='stars'>
                                                                            <li class='star' data-value='1'>
                                                                                <i class='fa fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' data-value='2'>
                                                                                <i class='fa fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' data-value='3'>
                                                                                <i class='fa fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' data-value='4'>
                                                                                <i class='fa fa-star fa-fw'></i>
                                                                            </li>
                                                                            <li class='star' data-value='5'>
                                                                                <i class='fa fa-star fa-fw'></i>
                                                                            </li>
                                                                            <span class="the-title"> - BOBINEMECHEK</span>
                                                                </section>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- Add Arrows -->
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                </div>

                                                <!-- Swiper JS -->
                                                <script src="js/swiper.min.js"></script>

                                                <!-- Initialize Swiper -->
                                                <script>
                                                    var swiper = new Swiper('.swiper-container', {
                                                        loop: true,

                                                        navigation: {
                                                            nextEl: '.swiper-button-next',
                                                            prevEl: '.swiper-button-prev',
                                                        },

                                                    });
                                                </script>

                                            </div>

                                        </div>
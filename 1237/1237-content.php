<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<!--banner-->
<div class="type-1237">
    <div class="container">
        <div class="row">
            <div class="m3">
                <div class="m3-container">
                    <div class="m3-content">
                        <div class="m3-parent-content-left">
                            <div class="col-xs-12 col-sm-6 col-md-2  m3-content-left"></div>
                            <!--Brunch -->
                            <div class="col-xs-12 col-sm-6 col-md-4 m3-content-menu">
                                <img src="<?php echo $url_path ?>/images/icon-food.PNG">
                                <h3>Bữa Sáng</h3>
                                <h5>Ưu đãi hôm nay</h5>
                                <div class="m3-content-menu-food">
                                    <h3>Gà trộn Sa-lát.
                                        <span class="price">$22</span>
                                    </h3>
                                    <div class="m3-content-menu-food-description">Sự kết hợp hoàn hảo giữa gà xào trộn với sa-lát và rau mầm</div>
                                </div>
                                <div class="m3-content-menu-food">
                                    <h3>Combo bữa sáng hoành tráng chỉ: <span class="price">$20</span></h3>
                                    <div class="m3-content-menu-food-description"></div>
                                </div>
                                <div class="m3-content-menu-food">
                                    <h3>Combo gồm cà phê và bánh sừng Bò nổi tiếng nhất nước Pháp.
                                        <span class="price">$11</span></h3>
                                    <div class="m3-content-menu-food-description">Cà phế nóng kết hợp với bánh sừng bò chứa đầy Socola làm cho bạn ngất ngây cả ngày</div>
                                </div>
                            </div>
                            <!--                <div class="clearfix"></div>-->
                        </div>

                        <div class="m3-parent-content-right">
                            <!--Happy  hour-->
                            <div class="col-xs-12 col-sm-6 col-md-4 m3-content-event">

                                <img src="<?php echo $url_path ?>/images/icon-coffe.PNG">
                                <h3>Giờ Khuyến Mãi</h3>
                                <h5>Sẽ bắt đầu vào lúc 15h</h5>
                                <p>Nhà hàng sẽ bắt đầu mở cửa lúc 15 giờ để chuẩn bị cho giờ ưu đãi và bữa tối sẽ bắt đầu vào lúc 17 giờ cùng ngày.
                                    Chúng tôi sẽ tiếp tục phục cho bữa sáng vào cuối tuần từ 10 giờ đến 15 giờ. Và chúng tối cũng tiếp tục phục vụ dưới sảnh đến 2 giờ khuya vào mỗi Thứ 7 và Chủ nhật hàng tuần.</p>
                                <h4>+359 562 958</h4>
                                <h6>Đảm bảo trong 30 phút!</h6>
                                <p class="m3-content-event-btn">
                                    <a href="#">
                                        <span class="span-hover">Đặt bàn ngay!</span>
                                    </a>
                                </p>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-2 m3-content-right"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="m3-parallax hidden-xs">
                        <div class="m3-background"> </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    <div class="clearfix"></div>
</div>



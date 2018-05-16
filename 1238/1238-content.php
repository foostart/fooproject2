<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1238">
    <div class="module-4_1">
        <div class="container">
            <!--TITLE-->
                <div class="menu-center">
                    <div class="sep-before"> 
                        <div class="sep-line"></div>
                    </div>
                    <div class="content">
                        <h2 class="text-divider-double">
                            Dịch Vụ
                        </h2>
                        <div class="text-divider-subtitle">Sự Kiện Đặc Biệt</div>
                    </div>
                    <div class="sep-after">
                        <div class="sep-line"></div>
                    </div>
                </div>
                <!--END TITLE-->
            <!--SERVICES-->
            <div class="type-1238_2">
                <div class="row">
                    <div class="m4-services">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                            <div class="m4-limit">
                                <div class="m4-limit-thumbnail">
                                    <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img src="<?php echo $url_path ?>/images/anh1.jpg " alt="reponsive-img" class="size-full">  </a>
                                    </div>
                                    <h4 class="m4-limit-services-title">
                                        <a href="/" title="Child Friendly">Cà Phê & Trà</a>
                                    </h4>
                                    <div>
                                        <p>Hỗn hợp mịn của nó và những thành phần khác giúp bạn cảm thấy ngọt ngào hơn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="m4-services">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                                <div class="m4-limit">
                                    <div class="m4-limit-thumbnail">
                                        <a href="/" title="Coffee &amp; Tea" class="has-border">
                                        <img src="<?php echo $url_path ?>/images/anh2.jpg" alt="reponsive-img" class="size-full"> </a>
                                        </div>
                                        <h4 class="m4-limit-services-title">
                                            <a href="/" title="Child Friendly">Bánh & Kẹo</a>
                                        </h4>
                                        <div>
                                            <p>Những món tráng miệng này không đơn giản là món ăn yêu thích của chúng tôi, họ cũng giúp xác định, theo cách riêng của họ...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="m4-services">
                                <div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                                    <div class="m4-limit">
                                        <div class="m4-limit-thumbnail">
                                            <a href="/" title="Coffee &amp; Tea" class="has-border">
                                            <img src="<?php echo $url_path ?>/images/anh3.jpg" alt="reponsive-img"  class="size-full"> </a>
                                            </div>
                                            <h4 class="m4-limit-services-title">
                                                <a href="/" title="Child Friendly">Thực đơn bữa trưa</a>
                                            </h4>
                                            <div>
                                                <p>Chúng tôi làm cho bữa trưa và bữa tối của chúng tôi với các thành phần tốt nhất chúng ta có thể tìm thấy để làm cho bữa ăn của chúng tôi nhiều hương vị càng tốt.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="m4-services">
                                    <div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                                        <div class="m4-limit">
                                            <div class="m4-limit-thumbnail">
                                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                                <img src="<?php echo $url_path ?>/images/anh4.jpg" alt="reponsive-img" class="size-full">
                                                </a>
                                            </div>
                                            <h4 class="m4-limit-services-title">
                                                <a href="/" title="Child Friendly">Nơi làm việc</a>
                                            </h4>
                                            <div>
                                                <p>Coffice ở Stockholm là một nơi tuyệt vời để làm việc. Lựa chọn thực phẩm ngoài bánh ngọt. Wifi miễn phí.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <!--END SERVICES-->
                    </div>
                </div>
            </div>


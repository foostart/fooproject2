<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<header class='type-1263'>
    <div class="module-quocdat">
        <div class="container">
            <div class="row">
                <div class="vamtam-add-ornaments-top col-md-12 pt40 pb20">
                    <div class="row">
                        <div class=" col-md-12 pt005 pb005">
                            <div class="text-center">
                                <img src="<?php echo $url_path ?>/images/Capture.PNG" alt="img-reponsive">
                                <h4 class="text-center fs24">KIỂM TRA SỰ KIỆN MENU</h4>
                                <span class="vamtam-blank-space height-10"></span>
                                <p class="vamtam-font-style-2 text-center">~Nấu ăn với niềm đam mê, mục đích và cường độ hoặc không nấu ăn chút nào.~</p>

                            </div>
                        </div>
                        <div class="vamtam-blank-space"></div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 vamtam-add-ornaments-all pt005 pb60">
                        <div class="row">

                            <!-- Blog One -->
                            <div class="pt005 pb005 col-md-4 col-sm-6 col-xs-12">
                                <div class="foodpress_menu fp_single_item_box">
                                    <div class=" fp_box   fp_popTrig style_ft3 bghighl">
                                        <div class="new_ft_img3">
                                            <img src="<?php echo $url_path ?>/images/Seafood-1.jpg" alt="" class="img-responsive">
                                            <span class="fp_price">$39</span>
                                        </div>
                                        <div class="menu_info ">
                                            <div class="fp_inner_box">
                                                <h3 class="">Đầu tôm, manila clams & amp; con trai</h3>
                                                <div class="menu_description">
                                                    Những loài sò ốc nhỏ này có vị ngọt và kết cấu chắc chắn.
                                                    <a class="fp_popTrig fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog One -->

                            <!-- Blog Two -->
                            <div class="pt005 pb005 col-md-4 col-sm-6 col-xs-12">
                                <div class="foodpress_menu fp_single_item_box">
                                    <div class=" fp_box    fp_popTrig style_ft3 bghighl">
                                        <div class="new_ft_img3">
                                            <img src="<?php echo $url_path ?>/images/Seafood-2.jpg" alt="" class="img-responsive">
                                            <span class="fp_price">$6.90</span>
                                        </div>
                                        <div class="menu_info ">
                                            <div class="fp_inner_box">
                                                <h3 class="">Campari</h3>
                                                <div class="menu_description">
                                                    Hương vị cay đắng của Campari và những ghi chú bưởi tươi tốt được làm mới khi pha trộn đơn giản với soda, say rượu trước bữa tối để đánh thức ...
                                                    <a class="fp_popTrig fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Two  -->

                            <!-- Blog Three -->
                            <div class="pt005 pb005 col-md-4 col-sm-6 col-xs-12">
                                <div class="foodpress_menu fp_single_item_box">
                                    <div class=" fp_box  fp_popTrig style_ft3 bghighl">
                                        <div class="new_ft_img3">
                                            <img src="<?php echo $url_path ?>/images/Seafood-3.jpg" alt="" class="img-responsive">
                                            <span class="fp_price">$9.50</span>
                                        </div>
                                        <div class="menu_info ">
                                            <div class="fp_inner_box">
                                                <h3 class="">Cá hồi hun khói kem, súp tỏi tây và khoai tây</h3>
                                                <div class="menu_description">
                                                    Phục vụ trong bát sâu với cá hồi hun khói và hẹ hớp trên đỉnh.
                                                    <a class="fp_popTrig fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
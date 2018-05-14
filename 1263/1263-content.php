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
                <div class="vamtam-add-ornaments-top manhphuc-level-01 col-md-12 pt40 pb20">
                    <div class="row">
                        <div class="manhphuc-grid manhphuc-level-02 col-md-12 pt005 pb005">
                            <div class="text-center">
                                <img src="images/Capture.PNG" alt="img-reponsive">
                                <h4 class="text-center fs24">SEASONAL INSPIRATION MENU</h4>
                                <span class="vamtam-blank-space height-10"></span>
                                <p class="vamtam-font-style-2 text-center">~Cook with passion, purpose and intensity or don’t cook at all.~</p>

                            </div>
                        </div>
                        <div class="vamtam-blank-space  vamtam-hide-lowres height-40"></div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 vamtam-add-ornaments-all pt005 pb60">
                        <div class="row">

                            <!-- Blog One -->
                            <div class="pt005 pb005 col-md-4">
                                <div class="foodpress_menu fp_single_item_box">
                                    <div class="new_ft3_layout fp_box menuItem c_100 normal_item fp_popTrig style_ft3 bghighl">
                                        <div class="new_ft_img3">
                                            <img src="images/Seafood-1.jpg" alt="" class="img-responsive">
                                            <span class="fp_price">$39</span>
                                        </div>
                                        <div class="menu_info ">
                                            <div class="fp_inner_box">
                                                <h3 class="">Head on prawns, manila clams &amp; mussels</h3>
                                                <div class="menu_description">
                                                    These small shellfish have a sweet flavour and a firm texture.
                                                    <a class="fp_popTrig fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog One -->

                            <!-- Blog Two -->
                            <div class="pt005 pb005 col-md-4">
                                <div class="foodpress_menu fp_single_item_box">
                                    <div class="new_ft3_layout fp_box menuItem c_100 normal_item fp_popTrig style_ft3 bghighl">
                                        <div class="new_ft_img3">
                                            <img src="images/Seafood-2.jpg" alt="" class="img-responsive">
                                            <span class="fp_price">$6.90</span>
                                        </div>
                                        <div class="menu_info ">
                                            <div class="fp_inner_box">
                                                <h3 class="">Campari</h3>
                                                <div class="menu_description">
                                                    Campari's bracing bitterness and lush grapefruit notes are refreshing when mixed simply with soda, drunk before dinner to awaken ...
                                                    <a class="fp_popTrig fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Two  -->

                            <!-- Blog Three -->
                            <div class="pt005 pb005 col-md-4">
                                <div class="foodpress_menu fp_single_item_box">
                                    <div class="new_ft3_layout fp_box menuItem c_100 normal_item fp_popTrig style_ft3 bghighl">
                                        <div class="new_ft_img3">
                                            <img src="images/Seafood-3.jpg" alt="" class="img-responsive">
                                            <span class="fp_price">$9.50</span>
                                        </div>
                                        <div class="menu_info ">
                                            <div class="fp_inner_box">
                                                <h3 class="">Creamy smoked salmon, leek & potato soup</h3>
                                                <div class="menu_description">
                                                    Served in deep bowls with smoked salmon and snipped chives on the top.
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
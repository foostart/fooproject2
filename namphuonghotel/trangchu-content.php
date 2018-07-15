<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1099">
    <div class="banner">
        <div class="limit-wrapper container">
            <div class="extended-column-inner">
                <div class="title">                      
                    <h2>WELCOME TO <mark>NAMPHUONG</mark> HOTEL</h2>               
                </div>
                <div class="info">
                    <a href="#" class="call">
                        <i class="fa fa-phone fa-lg" style="color: " aria-hidden="true"></i>
                        098 799 1693 - 092 331 8881                                 
                    </a>
                                
                </div>
                <div class="lienhe">
                    <a href="#" class="btn-border">Liên hệ</a> 
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="swiper-container">
                <div class="swiper-wrapper">                   
                    <div class="swiper-slide">
                        <div class="item-slide">
                            <div class="box-img">
                                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/h2.jpg" alt="dasdas"/>
                                <div class="text-wrap">
                                    <a href="#">
                                        <h3>PHÒNG RELAX</h3>
                                    </a>								
                                </div>
                            </div>
                            <div class="slide-hover">
                                <div class="desc">
                                    <h3>PHÒNG RELAX</h3>                                    
                                    Khách sạn  Oceanwind  bao gồm 7 tầng với 39 phòng nghỉ,  Oceanwind  được xây mới hoàn toàn theo tiêu chuẩn quốc tế với hướng nhìn thoáng đãng ra trung tâm...                                               
                                     <div class="price">2.000.000₫</div>
                                    <a href="#" class="btn-border">Xem thêm</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-slide">
                            <div class="box-img">
                                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/h3.jpg" alt="dasdas"/>
                                <div class="text-wrap">
                                    <a href="#">
                                        <h3>PHÒNG BEDO</h3>
                                    </a>								
                                </div>
                            </div>
                            <div class="slide-hover">
                                <div class="desc">
                                    <h3>PHÒNG BEDO</h3>                                   
                                    Khách sạn  Oceanwind  bao gồm 7 tầng với 39 phòng nghỉ,  Oceanwind  được xây mới hoàn toàn theo tiêu chuẩn quốc tế với hướng nhìn thoáng đãng ra trung tâm...                                                
                                <div class="price">1.400.000₫</div>
                                <a href="#" class="btn-border">Xem thêm</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-slide">
                            <div class="box-img">
                                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/h4.jpg" alt="dasdas"/>
                                <div class="text-wrap">
                                    <a href="#">
                                        <h3>PHÒNG SERSON</h3>
                                    </a>								
                                </div>
                            </div>
                            <div class="slide-hover">
                                <div class="desc">
                                    <h3>PHÒNG SERSON</h3>
                                    Khách sạn  Oceanwind  bao gồm 7 tầng với 39 phòng nghỉ,  Oceanwind  được xây mới hoàn toàn theo tiêu chuẩn quốc tế với hướng nhìn thoáng đãng ra trung tâm...             
                                <div class="price">1.200.000₫</div>
                                <a href="#" class="btn-border">Xem thêm</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-slide">
                            <div class="box-img">
                                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/h5.jpg" alt="dasdas"/>
                                <div class="text-wrap">
                                    <a href="#">
                                        <h3>PHÒNG HYE</h3>
                                    </a>								
                                </div>
                            </div>
                            <div class="slide-hover">
                                <div class="desc">
                                    <h3>PHÒNG HYE</h3>
                                    Khách sạn  Oceanwind  bao gồm 7 tầng với 39 phòng nghỉ,  Oceanwind  được xây mới hoàn toàn theo tiêu chuẩn quốc tế với hướng nhìn thoáng đãng ra trung tâm...            
                                <div class="price">980.000₫</div>
                                <a href="#" class="btn-border">Xem thêm</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-slide">
                            <div class="box-img">
                                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/h6.jpg" alt="dasdas"/>
                                <div class="text-wrap">
                                    <a href="#">
                                        <h3>PHÒNG HOUSE</h3>
                                    </a>								
                                </div>
                            </div>
                            <div class="slide-hover">
                                <div class="desc">
                                    <h3>PHÒNG HOUSE</h3>
                                    KKhách sạn  Oceanwind  bao gồm 7 tầng với 39 phòng nghỉ,  Oceanwind  được xây mới hoàn toàn theo tiêu chuẩn quốc tế với hướng nhìn thoáng đãng ra trung tâm...            
                                <div class="price">1.450.000₫</div>
                                <a href="#" class="btn-border">Xem thêm</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-slide">
                            <div class="box-img">
                                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/h7.jpg" alt="dasdas"/>
                                <div class="text-wrap">
                                    <a href="#">
                                        <h3>PHÒNG CPY</h3>
                                    </a>								
                                </div>
                            </div>
                            <div class="slide-hover">
                                <div class="desc">
                                    <h3>PHÒNG CPY</h3>
                                    Khách sạn  Oceanwind  bao gồm 7 tầng với 39 phòng nghỉ,  Oceanwind  được xây mới hoàn toàn theo tiêu chuẩn quốc tế với hướng nhìn thoáng đãng ra trung tâm...            
                                <div class="price">1.100.000₫</div>
                                <a href="#" class="btn-border">Xem thêm</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact">
                    <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
        <div class="dichvu">
            <div class="row">				
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="fa fa-bell-o"></i>                         
                        <div class="text">
                            <h3>Dịch vụ phòng 24/7</h3>
                                Oceanwind cung cấp các dịch vụ tận phòng 24/7, bất cứ khi nào bạn cần
                        </div>
                    </div>
                </div>								
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="fa fa-car" aria-hidden="true"></i> 
                        <div class="text">
                            <h3>Dịch vụ thuê xe</h3>
                            Có đủ xe tay ga , xe số cho khách thuê theo ngày ( tháng )
                        </div>
                    </div>
                </div>								
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="fa fa-home" aria-hidden="true"></i> 
                        <div class="text">
                            <h3>Hướng dẫn thăm quan</h3>
                                Giúp đỡ khách hàng tìm hiểu về những dịch vụ thăm quan tốt nhất
                        </div>
                    </div>
                </div>				
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="fa fa-cutlery" aria-hidden="true"></i> 
                        <div class="text">
                           <h3>Căn bếp tiện nghi</h3>
                                Mỗi phòng đều có bếp gồm đầy đủ những dụng cụ cần thiết phục vụ cho việc nấu ăn 
                        </div>
                    </div>
                </div>				
            </div>
        </div>
    </div>   
    <div class="intro">       
        <div class="container">           
                <div class="inner-padding">
                    <div class="intro_title">
                        <h3>GIỚI THIỆU VỀ KHÁCH SẠN</h3>
                    </div>
                    <ul class="intro_content">							
                        <li>
                            <div class="text">
                                Đi kèm với dịch vụ lưu trú và ẩm thực, khách sạn NAMPHUONG còn cung cấp các dịch vụ - giải pháp cho tiệc và hội nghị. Hơn 20 sảnh tiệc – hội nghị với sức chứa mỗi nơi từ 30 – 1000 người, được trang bị máy móc hiện đại và chất lượng phục vụ đẳng cấp. NAMPHUONG là khách sạn quốc tế 4 sao, được Tổng Cục Du Lịch Việt Nam - Hiệp Hội Du lịch Việt Nam bình chọn là một trong 10 khách sạn hàng đầu Việt Nam liên tục từ năm 1999 đến 2014.
                            </div>                              
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="col-md-6" style="padding: 0px; margin: 0px">
            <a href="# ">
                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/wide-banner.jpg" alt="dasdas"/>
            </a>
        </div>
        <div class="col-md-6" style="padding: 0px; margin: 0px">
            <a href="#">
                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/wide-banner1.jpg" alt="dasdas"/>
            </a>
        </div>
    </div>
</div>


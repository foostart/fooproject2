<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1244">
    <div class="container">
        <div class="row">
            <div class="m11-title-footer">
                <h2>Délicious</h2>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 c1 col-sm-12">
                <h4>Về chúng tôi</h4>
                <p class="info">Osteria Francescana là một nhà hàng thuộc sở hữu và điều hành bởi đầu bếp Massimo Bottura ở Modena, Ý</p>
                <p class="c1-btn">
                    <a href="#">
                        <span class="span-hover">Mua chủ đề này</span>
                    </a>
                </p>
            </div>
            <div class="col-md-4 c2 col-sm-12">
                <h4>Đăng ký nhận tin tức và ưu đãi</h4>
                <div class="c2-input">
                    <input type="email" name="EMAIL" placeholder="Nhập email..." required="">
                    <input type="submit" value="Đăng ký">
                    <p>*Chúng tôi không bao giờ gửi thư rác cho bạn!</p>
                </div>
                <div class="c2-icon">
                    <a href="#">
                        <span class="fa fa-tripadvisor"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-pinterest"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-instagram"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 c3 col-sm-12">
                <h4>Liên hệ</h4>
                <p class="info">Via Stella, 22<br> Modena MO, Italy<br> +390 59 223 912</p>
                <p class="info"><a href="#">hello@yoursite.com</a></p>
            </div>
        </div>
    </div>
    <div class="ad">
        <div class="ad1">
            © 2016
            <a href="#">Delicious Restaurant & Café Theme</a> by
            <a href="#">VamTam Themes</a>
        </div>
        <div class="ad2">
            Proudly powered by
            <a href="#"> WordPress</a>
        </div>
    </div>
</div>



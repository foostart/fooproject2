<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

        <div class="type-1235">
            <header>
                <div class="header-top">
                    <div class="navi-logo">
                        <a href="#">Délicious</a>
                    </div>
                    <div class="navi-menus">
                        <ul>
                            <li>
                                <a href="#">Trang Chủ</a>
                            </li>
                            <li>
                                <a href="#">Giới Thiệu</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Thực Đơn</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Đặt Trước</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Bộ Sưu Tập</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Blog</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Đặc Điểm</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Cửa Hàng</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Liên Hệ</a>
                                <ul>
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffe</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="navi-cart">
                        <div class="search">
                            <i class="fa fa-search icon-search"></i>
                            <form class="search-panel" method="post">
                                <input type="search" class="menu-search-text" placeholder="Please input search...">
                                <button class="fa fa-search menu-search-btn"></button>
                            </form>
                        </div>
                        <div class="shop-cart">
                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                            <span>0</span>
                            <div class="list-cart">
                                <span>Không có sản phẩm</span>
                            </div>
                        </div>
                        <div id="icon-responsive">
                            <i class="fa fa-bars"></i>
                        </div>
                    </div>
                </div>
                <div class="header-banner">
                    <div class="banner-text">
                        <h1>Coffee</h1>
                        <h1>Matters</h1>
                        <p>~Since 1987</p>
                    </div>
                </div>
            </header>
        </div>

<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

 <!-- <div class="type-1273">
    <div class="header-top">
        <header class="main-header">
            <div class="limit-wrapper">
                <div class="header-content">
                    <div class="navi-logo">
                        <a href="#">Délicious</a>
                    </div>
                    <div class="m1-navi-menus toggle-transition">
                        <ul>
                            <li>
                                <a href="#" class="m1-navi-menus-Activity">Homes</a>
                                <ul class="m1-navi-menus-subMenu">
                                    <li><a href="#" >Gourmet</a></li>
                                    <li><a href="#" class="m1-navi-menus-Activity">Coffee</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>

                            </li>
                            <li>
                                <a href="#">About</a>
                                <ul class="m1-navi-menus-subMenu">
                                    <li><a href="#">People</a></li>
                                    <li><a href="#">Guestbook</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Menu</a>
                                <ul class="m1-navi-menus-subMenu">
                                    <li><a href="#">Expressive</a></li>
                                    <li><a href="#">Handsome</a></li>
                                    <li><a href="#">Classic</a></li>
                                    <li><a href="#">Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Reservation</a></li>
                            <li>
                                <a href="#">Gallery</a>
                                <ul class="m1-navi-menus-subMenu">
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Coffee Shop</a></li>
                                    <li><a href="#">Sushi Bar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                                <ul class="m1-navi-menus-subMenu">
                                    <li><a href="#">Healthy Food</a></li>
                                    <li><a href="#">Recipes</a></li>
                                    <li><a href="#">Cooking</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Features</a>
                                <ul class="m1-navi-menus-subMenu">
                                    <li><a href="#">Why Buy?</a></li>
                                    <li><a href="#">Theme Options</a></li>
                                    <li><a href="#">Coming Soon</a></li>
                                    <li><a href="#">Icons</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                    </div>
                    <div class="navi-cart">
                        <div class="shop-cart">
                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                            <span>0</span>
                            <div class="list-cart">
                                <span>No product in the cart</span>
                            </div>
                        </div>
                       
                        <div class="search">
                            <i class="fa fa-search icon-search"></i>
                            <form class="search-panel" method="post">
                                <input type="search" class="menu-search-text" placeholder="Please input search...">
                                <button class="fa fa-search menu-search-btn"></button>
                            </form>
                        </div> 
                        <div class="menu-icon">
                            <a><i class="fa fa-navicon"></i></a>
                        </div>                    
                    </div>
                </div>
            </div>
        </header>
        <div id="sub-header" class="layout-full has-background">
            <div class="meta-header" style="background-color:#582892;background-image:none;">
            <div class="limit-wrapper">
            <div class="meta-header-inside">
                <header class="page-header layout-centered  " data-progressive-animation="page-title">
                <h1 style="color: rgb(255, 157, 171); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" itemprop="headline">
                Why Buy the Theme
                </h1>
                <div class="page-header-line"></div>
                <div class="desc" style="color: rgb(255, 157, 171); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Endless layout possibilities</div>
                </header>
            </div>
            </div>
            </div>
        </div>
    </div>
</div> -->


<div class="type-1273">
    <header>
        <div class="header-top">
            <div class="navi-logo">
                <a href="#">Délicious</a>
            </div>
            <div class="m1-navi-menus toggle-transition">
                <ul>
                    <li>
                        <a href="#" class="m1-navi-menus-Activity">Homes</a>
                        <ul class="m1-navi-menus-subMenu">
                            <li><a href="#" >Gourmet</a></li>
                            <li><a href="#" class="m1-navi-menus-Activity">Coffee</a></li>
                            <li><a href="#">Sushi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                        <ul class="m1-navi-menus-subMenu">
                            <li><a href="#">People</a></li>
                            <li><a href="#">Guestbook</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Menu</a>
                        <ul class="m1-navi-menus-subMenu">
                            <li><a href="#">Expressive</a></li>
                            <li><a href="#">Handsome</a></li>
                            <li><a href="#">Classic</a></li>
                            <li><a href="#">Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Reservation</a></li>
                    <li>
                        <a href="#">Gallery</a>
                        <ul class="m1-navi-menus-subMenu">
                            <li><a href="#">Restaurant</a></li>
                            <li><a href="#">Coffee Shop</a></li>
                            <li><a href="#">Sushi Bar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                        <ul class="m1-navi-menus-subMenu">
                            <li><a href="#">Healthy Food</a></li>
                            <li><a href="#">Recipes</a></li>
                            <li><a href="#">Cooking</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Features</a>
                        <ul class="m1-navi-menus-subMenu">
                            <li><a href="#">Why Buy?</a></li>
                            <li><a href="#">Theme Options</a></li>
                            <li><a href="#">Coming Soon</a></li>                                    
                            <li><a href="#">Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Contact</a></li>

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
                        <span>No product in the cart</span>
                    </div>
                </div>
                <div id="icon-responsive">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
        <div id="sub-header" class="layout-full has-background">
            <div class="meta-header" style="background-color:#582892;background-image:none;">
                <div class="limit-wrapper">
                    <div class="meta-header-inside">
                        <header class="page-header layout-centered" data-progressive-animation="page-title">
                            <h1 style="color: rgb(255, 157, 171); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" itemprop="headline">
                            Why Buy the Theme
                            </h1>
                            <div class="page-header-line"></div>
                            <div class="desc" style="color: rgb(255, 157, 171); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Endless layout possibilities</div>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
</div>
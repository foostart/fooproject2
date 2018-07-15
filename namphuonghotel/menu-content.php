<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div  class='type-1246'>
    <header>
        <div id="logo">
            <a href="index.php">NAMPHUONG<p>HOTEL</p></a>
        </div>
        <div class="m1-navi-boder">
            <div class="m1-navi">              
                <div class="m1-navi-menus">
                    <ul>
                        <li>
                            <a href="index.php">TRANG CHỦ</a>
                        </li>
                        <li>
                            <a href="index.php?page=gioithieu">GIỚI THIỆU</a>
                        </li>
                        <li>
                            <a href="#">HỆ THỐNG PHÒNG</a>
                              <ul class="m1-navi-menus-subMenu">
                                  <li><a href="#">CÁC LOẠI PHÒNG</a></li>
                                  <li><a href="#">Phòng gia đìnnh</a></li>
                                  <li><a href="#">Phòng standard</a></li>
                                  <li><a href="#">Phòng deluxe double</a></li>
                                  <li><a href="#">CĂN HỘ CHO THUÊ</a></li>
                              </ul>
                            </li>
                        <li>
                            <a href="#">TIN TỨC</a>                      
                        </li>
                        <li><a href="#">LIÊN HỆ</a></li>
                    </ul>
                </div>
                <div class="m1-navi-icon">                    
                    <div class="m1-navi-icon-mobile-btn">
                        <i class="fa fa-reorder"></i>
                    </div>
                </div>
            </div>
        </div>
        
    </header>    
    <div id="vamtam-overlay-search" class="vamtam-animated vamtam-fadein">
        <button id="vamtam-overlay-search-close"  class="vamtam-animated vamtam-zoomin">
            <span class="fa fa-times" style=""></span>
        </button>       
    </div>
</div>

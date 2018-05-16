<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1260">
    <div class="container">
        <div class="content">
            <div class="row row-top"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 background-left"></div>
                <div class="col-xs-12 col-sm-6 col-md-6 content-menu">
                    <img src="<?php echo $url_path ?>/images/ico.PNG" alt="icon">
                    <div class="menu-center">
                        <div class="sep-before"> 
                            <div class="sep-line"></div>
                        </div>
                        <div class="content">
                            <h3>Brunch</h3>
                            <div class="text-divider-subtitle">Starts at 11:00 am</div>
                        </div>
                        <div class="sep-after">
                            <div class="sep-line"></div>
                        </div>
                    </div>

                    <div class="content-menu-food">
                        <h3>Combo Menu Kiểu Mỹ<span class="disk-price">$15</span></h3>
                        <div class="disk-descitpion">Trứng với thịt xông khói xông khói, cà chua, hành lá và phô mai</div>
                    </div>

                    <div class="content-menu-food">
                        <h3>Combo Menu Cà Phê Bơ Dâu Với Bánh Mì Nướng Kiểu Pháp<span class="disk-price">$11</span></h3>
                        <div class="disk-descitpion">Cà phê nóng, bánh sừng bò, mỗi loại có chứa một thanh sôcôla đen chất lượng cao</div>
                    </div>

                    <div class="content-menu-food">
                        <h3 class="">Combo Menu Cà Phê Và Bánh Sừng Bò<span class="disk-price">$11</span></h3>
                        <div class="disk-descitpion">Cà phê nóng , bánh sừng bò, mỗi loại có chứa một thanh sôcôla đen chất lượng cao</div>
                    </div>

                    <div class="content-menu-food">
                        <h3 class="">Combo Menu Bữa Sáng Bự<span class="disk-price">$20</span></h3>
                        <div class="disk-descitpion">
                        </div>
                    </div>

                    <div class="content-menu-food">
                        <h3>Gà Điều Xào Rau Xanh<span class="disk-price">$22</span></h3>
                        <div class="disk-descitpion">Gà điều với rau xào ăn kèm với rau xanh, rau mầm và nấm hầm.</div>
                    </div>

                    <p class="icon_page">❈</p>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 background-right"></div>
            </div>
            <div class="row row-bottom"></div>
        </div>
    </div>
</div>
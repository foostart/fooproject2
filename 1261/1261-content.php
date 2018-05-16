<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<!--banner-->
<div class="type-1261">
    <div class="m3">
        <div class="m3-container">
            <div class="m3-content">
                <div class="col-xs-12 col-md-3  m3-content-left"></div>
                <!--Brunch -->
                <div class="col-xs-12  col-md-6 m3-content-menu">
                    <div class="content-menu">
                        <span class="m3-content-menu-icon"><img src="<?php echo $url_path ?>/img/cookie.JPG" alt="img-reposive"></span>
                        <h3>BRUNCH</h3>
                        <h5>Today Specials</h5> 
                    </div>
                    <div class="tab-content">
                        <div class="menu">
                            <div class="row">
                                <ul class="nav nav-tabs">
                                    <li ><a data-toggle="tab" href="#home" class="active-tab"><span class="title-text">Cá</span></a></li>
                                    <li><a data-toggle="tab" href="#menu1"><span class="title-text">Thịt</span></a></li>
                                    <li><a data-toggle="tab" href="#menu2"><span class="title-text">Rau quả</span> </a></li>
                                    <li><a data-toggle="tab" href="#menu3"> <span class="title-text">Sandwiches</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="home" class="tab-pane fade in active">
                            <div class="text-menu">
                                <h3>Tôm đầu bự, trai manila và hến<span class="price">$39</span></h3>
                                <div class="m3-content-menu-food-description">Những loài sò ốc nhỏ này có vị ngọt và kết cấu chắc chắn.</div>


                            </div>
                            <div class="m3-content-menu-food">
                                <h3>Tôm đầu bự, trai manila và hến<span class="price">$39</span></h3>
                                <div class="m3-content-menu-food-description">Những loài sò ốc nhỏ này có vị ngọt và kết cấu chắc chắn.</div>
                            </div>
                            <div class="m3-content-menu-food">
                                <h3>Cá hồi hun khói kem, súp tỏi tây và khoai tây
                                    <span class="price">$9.50</span></h3>
                                <div class="m3-content-menu-food-description">Phục vụ trong bát sâu với cá hồi hun khói và hẹ trên đỉnh.</div>
                            </div>
                            <div class="m3-content-menu-food">
                                <h3>Cá hồi sốt xìn xịt<span class="price">$33</span></h3>
                                <div class="m3-content-menu-food-description">Cá hồi, húng quế khoai tây, cải xoăn cà tím marsala và sốt bơ balsamic.</div>
                            </div>
                           
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3 class="menu-text">Ớt cựa gà hun khói   <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                            <h3 class="menu-text">Ớt cựa gà hun khói   <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                            <h3 class="menu-text">Ớt cựa gà hun khói   <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                            <h3 class="menu-text">Ớt cựa gà hun khói   <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                            <h3 class="menu-text">Ớt cựa gà hun khói   <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>



                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3 class="menu-text">Gà xào rau củ   <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                            <h3 class="menu-text">Gà xào rau củ   <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>   
                            <h3 class="menu-text">Gà xào rau củ   <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>  
                            <h3 class="menu-text">Gà xào rau củ   <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                            <h3 class="menu-text">Gà xào rau củ   <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>



                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3 class="menu-text">Cà chua khô Bruschetta     <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                            <h3 class="menu-text">Cà chua khô Bruschetta     <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                            <h3 class="menu-text">Cà chua khô Bruschetta     <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                            <h3 class="menu-text">Cà chua khô Bruschetta     <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                            <h3 class="menu-text">Cà chua khô Bruschetta     <span class="price">$33</span></h3>
                            <p>Phục vụ với cá hồi hun khói và hẹ trên đỉnh.</p>
                        </div>
                    </div>

                </div>


                <!--Happy  hour-->
                <div class="col-xs-12  col-md-3 m3-content-right"></div>
                <div class="clearfix"></div>
            </div>
            <div class="m3-parallax">

            </div>
        </div>
    </div> 
</div>   


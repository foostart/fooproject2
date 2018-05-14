<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<!--banner-->
<div class="">
    <div class="m3">
        <div class="m3-container">
            <div class="m3-content">
                <div class="col-xs-12 col-sm-2 col-md-2  m3-content-left"></div>
                <!--Brunch -->
                <div class="col-xs-12 col-sm-4 col-md-4 m3-content-menu">
                    <img src="images/icon-food.PNG" class="icon-top">
                    <h3>Brunch</h3>
                    <h5>Today Specials</h5>
                    <div class="m3-content-menu-food">
                        <h3>Cashew Chicken With Stir-Fry Vegetables &amp; Green Salad
                            <span class="price">$22</span>
                        </h3>
                        <div class="m3-content-menu-food-description">Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.</div>
                    </div>
                    <div class="m3-content-menu-food">
                        <h3>Optic Big Breakfast Combo Menu<span class="price">$20</span></h3>
                        <div class="m3-content-menu-food-description"></div>
                    </div>
                    <div class="m3-content-menu-food">
                        <h3>Coffee and Pain au chocolat (Chocolate croissant) Combo Menu
                            <span class="price">$11</span></h3>
                        <div class="m3-content-menu-food-description">Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...</div>
                    </div>
                </div>
                <!--Happy  hour-->
                <div class="col-xs-12 col-sm-4 col-md-4 m3-content-event">
                    
                    <img src="images/icon-coffe.PNG" class="icon-top">
                    <h3>Happy hour</h3>
                    <h5>Starts at 3pm</h5>
                    <p>The restaurant will open at 3pm for happy hour and dinner service starting at 5pm. We will continue to offer brunch on weekends from 10am-3pm with bottomless mimosas. We will also continue with our late night lounge on Friday and Saturdays until 2am.</p>
                    <h4>+359 562 958</h4>
                    <h6>30 minute guarantee!</h6>
                    <p class="m3-content-event-btn">
                        <a href="#">
                            <span class="span-hover">Book a table!</span>
                        </a>
                    </p>
                </div>

                <div class="col-xs-12 col-sm-2 col-md-2 m3-content-right"></div>
                <div class="clearfix"></div>
            </div>
            <div class="m3-parallax">
                <div class="m3-background"> </div>
            </div>
        </div>
    </div>    
</div>


<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1260">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 background-left"></div>

                <div class="col-xs-12 col-sm-6 col-md-6 content-menu">

                    <img src="images/ico.PNG">
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
                        <h3>American Brunch Combo Menu<span class="disk-price">$15</span></h3>
                        <div class="disk-descitpion">Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese</div>
                    </div>

                    <div class="content-menu-food">
                        <h3>Coffee Strawberry Jam French Toast with Strawberry Butter Combo Menu<span class="disk-price">$11</span></h3>
                        <div class="disk-descitpion">
                            Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...</div>
                    </div>

                    <div class="content-menu-food">
                        <h3 class="">Coffee and Pain au chocolat (Chocolate croissant) Combo Menu<span class="disk-price">$11</span></h3>
                        <div class="disk-descitpion">Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...</div>
                    </div>

                    <div class="content-menu-food">
                        <h3 class="">Optic Big Breakfast Combo Menu<span class="disk-price">$20</span></h3>
                        <div class="disk-descitpion">
                        </div>
                    </div>

                    <div class="content-menu-food">
                        <h3>Cashew Chicken With Stir-Fry Vegetables Green Salad<span class="disk-price">$22</span></h3>
                        <div class="disk-descitpion">
                            Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.
                        </div>
                    </div>

                    <p class="icon_page">❈</p>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 background-right"></div>
            </div>


        </div>

    </div>
</div>
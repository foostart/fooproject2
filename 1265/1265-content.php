<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1265">
    <div class="container">
        <div class="row">
            <!--content-->
            <div class="logo-footer col-md-4 col-sm-4 col-xs-12">
                <!--columns-->
                <div class="content">   
                    <h2>Pancakes</h2>

                    <div class="content1">
                        <a href="#"><div class="title">American Brunch Combo Menu merican Brunch Com</div><div class="price">$15</div></a><br>
                        <div class="content3">...........................................................</div>    
                    </div>
                    <div class="content2">
                        <a href="#">Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.</a>
                    </div>  
                    <div class="content1">
                        <a href="#"><div class="title">Blueberry banana pancakes</div><div class="price">$5</div></a><br>
                        <div class="content3">...........................................................</div>   
                    </div>
                    <div class="content2">
                        <a href="#">Banana, almond milk, vanilla, cinnamon, blueberry topping</a>
                    </div>  
                    <div class="content1">
                        <a href="#"><div class="title">Traditional pancakes with maple syrup butter & berry jam</div><div class="price">$5</div></a><br>
                        <div class="content3">...........................................................</div>   
                    </div>
                    <div class="content2">
                        <a href="#">Milk, eggs, strawberries, butter, maple syrup</a>
                    </div>  
                </div>
                <!--end columns-->
            </div>
            <div class="logo-footer col-md-4 col-sm-4 col-xs-12">
                <!--columns-->
                <div class="content">   
                    <h2>Sandwiches</h2>

                    <div class="content1">
                        <a href="#"><div class="title">French Toast with Strawberry Jam</div><div class="price">$11</div></a><br>
                        <div class="content3">...........................................................</div>   
                    </div>
                    <div class="content2">
                        <a href="#"> Hot coffee in the company of fresh bread toast topped with homemade strawberry butter, warm maple syrup, and fresh ...</a>
                    </div>
                    <div class="content1">
                        <a href="#"><div class="title">Home made bread</div><div class="price">$3 each</div></a><br>
                        <div class="content3">...........................................................</div>   
                    </div>
                    <div class="content2">
                        <a href="#"></a>
                    </div>
                    <div class="content1">
                        <a href="#"><div class="title">Sun-Dried Tomato Bruschetta</div><div class="price">$7</div></a><br>
                        <div class="content3">...........................................................</div>      
                    </div>
                    <div class="content2">
                        <a href="#"></a>
                    </div>

                </div>
                <!--end columns-->
            </div>
            <div class="logo-footer col-md-4 col-sm-4 col-xs-12">
                <!--columns-->
                <div class="content">   
                    <h2>Brunch</h2>

                    <div class="content1">
                        <a href="#"><div class="title">Coffee & Strawberry Jam French Toast with Strawberry Butter Combo Menu</div><div class="price">$11</div></a><br>
                        <div class="content3">...........................................................</div>       
                    </div>
                    <div class="content2">
                        <a href="#"> Hot coffee in the company of fresh bread toast topped with homemade strawberry butter, warm maple syrup, and fresh ...</a>
                    </div>  
                    <div class="content1">
                        <a href="#"><div class="title">Coffee and Pain au chocolat (Chocolate croissant) Combo Menu</div><div class="price">$11</div></a><br>
                        <div class="content3">...........................................................</div>       
                    </div>
                    <div class="content2">
                        <a href="#">Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...</a>
                    </div>  
                    <div class="content1">
                        <a href="#"><div class="title">Optic Big Breakfast Combo Menu</div><div class="price">$20</div></a><br>
                        <div class="content3">...........................................................</div>       
                    </div>
                    <div class="content2">
                        <a href="#"></a>
                    </div>  
                </div>
                <!--end columns-->
            </div>
            <!--end content-->
        </div>
    </div>
</div>



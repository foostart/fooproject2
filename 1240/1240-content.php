<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="Module-6">
    <div class="container">
        <div class="row ">
            <div class="col-md-4">

                <div class="img-cafe">
                    <img src="images/anh1.jpg" alt="anh1">
                </div>

            </div>
            <div class="col-md-4">

                <div class="M6-grid-1-2">
                    <img src="images/icon-coffe.PNG">
                    <h2>Buddha:<br> How to drink tea?</h2>
                    <p> The types of tea are white tea, green tea, yellow tea, oolong tea, black tea, and pu-erh tea. “When you have the title ‘white tea’ or ‘green tea’, you’re actually describing the process by which it has been made,” Woollard says. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="M7">
                    <div class='row'>
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner">        
                                <!-- Quote 1 -->
                                <div class="item active">
                                   
                                        <div class="row"> 
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    
                                                    <div class="swiper-slide">
                                                        <img src="images/anh6.jpg" alt="anh6">
                                                        <div class="addtocart">
                                                            <a href="#">Add to Cart</a>
                                                        </div>
                                                        <div class="home-chef">
                                                            <h5>Home Chef</h5>
                                                            <span class="tagged">
                                                                <a href="#">BREAKFAST</a>
                                                                <a href="#">CAPPUCCINO</a>
                                                                <a href="#">COFFEE</a>
                                                                <br>
                                                                <a href="#" class="name-slide">Mix of Croissants Breakfast</a>
                                                                <br>
                                                                <span class="price">£5.00</span>
                                                            </span>
                                                        </div>

                                                    </div>
                                                     <div class="swiper-slide">
                                                        <img src="images/anh6.jpg" alt="anh6">
                                                        <div class="addtocart">
                                                            <a href="#">Add to Cart</a>
                                                        </div>
                                                        <div class="home-chef">
                                                            <h5>Home Chef</h5>
                                                            <span class="tagged">
                                                                <a href="#">BREAKFAST</a>
                                                                <a href="#">CAPPUCCINO</a>
                                                                <a href="#">COFFEE</a>
                                                                <br>
                                                                <a href="#"class="name-slide">Mix of Croissants Breakfast</a>
                                                                <br>
                                                                <span class="price">£5.00</span>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="images/anh6.jpg" alt="anh6">
                                                        <div class="addtocart">
                                                            <a href="#">Add to Cart</a>
                                                        </div>
                                                        <div class="home-chef">
                                                            <h5>Home Chef</h5>
                                                            <span class="tagged">
                                                                <a href="#">BREAKFAST</a>
                                                                <a href="#">CAPPUCCINO</a>
                                                                <a href="#">COFFEE</a>
                                                                <br>
                                                                <a href="#" class="name-slide">Mix of Croissants Breakfast</a>
                                                                <br>
                                                                <span class="price">£5.00</span>
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                                                <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                                            </div>


                                        </div>
                                    
                                </div>  
                            </div>
                        </div>   

                    </div>

                </div>
            </div>
        </div>

        <div class="img-bottom">
            <div class="container">
                <div class="row">
                    <p>
                        <img src="images/anh3.jpg" alt="anh3">
                    </p>
                </div>
            </div>
        </div>
    </div>


<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1286">
    <div class="container">
        <img src="images/sushi-icon-4.svg" class="main-img">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="Content">
                        <h4 class="title">"Life tastes better with Délicious"</h4>
                        <div class="vote-star"> 
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="the-title">-CHARLES F. LUMMIS </span>
                        </div> 
                        <div class="content-des">
                            Started off with the Mixed Seafood Sampler (Venetian Style). Foe our main dish we ordered the Vermicelli with Cuttle Fish Ink Sauce over Polenta and Tuscan Roast Lamb Chops. Everything was delicious.
                        </div>

                    </div>

                </div>
                
                 <div class="swiper-slide">
                    <div class="Content">
                        <h4 class="title">"Life tastes better with Délicious"</h4>
                        <div class="vote-star"> 
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="the-title">-CHARLES F. LUMMIS </span>
                        </div> 
                        <div class="content-des">
                            Started off with the Mixed Seafood Sampler (Venetian Style). Foe our main dish we ordered the Vermicelli with Cuttle Fish Ink Sauce over Polenta and Tuscan Roast Lamb Chops. Everything was delicious.
                        </div>

                    </div>

                </div>
                
                 <div class="swiper-slide">
                    <div class="Content">
                        <h4 class="title">"Life tastes better with Délicious"</h4>
                        <div class="vote-star"> 
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="the-title">-CHARLES F. LUMMIS </span>
                        </div> 
                        <div class="content-des">
                            Started off with the Mixed Seafood Sampler (Venetian Style). Foe our main dish we ordered the Vermicelli with Cuttle Fish Ink Sauce over Polenta and Tuscan Roast Lamb Chops. Everything was delicious.
                        </div>

                    </div>

                </div>
               

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

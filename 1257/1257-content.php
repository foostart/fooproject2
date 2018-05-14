<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1257">
    <!-- BEGIN FOOTER -->
    
        <div class="container">
            <a href="#" style=" text-decoration:none;
               text-align:center;">
                18 PEOPLE WROTE TO US:
            </a>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <div class="cbp-item-wrapper" >
                        <div class="comment-inner">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <header >
                                <h5 >Antonio Hurtado de Mendoza</h5>
                                <div class="aa"></div>
                            </header>
                            <p>Our hotel made us reservations for our<br> anniversary, so we were seated in the<br> smaller, more intimate room, which<br> was nice. The service was great and so <br>was our food. </p>
                            <footer class="comment-footer">
                                <div title="3:42 pm">2 May, 2014</div>
                            </footer>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <div class="cbp-item-wrapper">
                        <div class="comment-inner"> 
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <header >
                                <h5>Thomas Lovell Beddoes</h5>
                                <div class="aa"></div>
                            </header>
                            <p>This was our second visit to Larisa and Vergilio’s wonderful restaurant. Despite being late (my fault) Larisa got us sorted quickly but be aware, this restaurant has limited seating and is very popular so we were lucky (don’t get lost on the way!). The characteristic is fresh produce, a deceptively simple menu, beautifully cooked and complemented by a good wine…</p>
                            <footer class="comment-footer">
                                <div title="3:42 pm">2 May, 2014</div>
                            </footer>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <div class="cbp-item-wrapper">
                        <div class="comment-inner">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <header >
                                <h5>Maxwell Anderson</h5>
                                <div class="aa"></div>
                            </header>
                            <p>This is my first review because the food was so amazingly good we actually offered to take the chef with us to Dubai! You have to try this restaurant! It’s mouthwatering.</p>
                            <footer class="comment-footer">
                                <div title="3:41 pm">2 May, 2014</div>
                            </footer>
                        </div>
                    </div>

                </div>
                <!-- BEGIN COLUMNS -->

            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <div class="cbp-item-wrapper">
                        <div class="comment-inner">
                            <i class="fa fa-quote-right" aria-hidden="true"></i> <header>
                                <h5>Michael Leunig</h5>
                                <div class="aa"></div>
                            </header>
                            <p>The food was excellent and the service was the best we’ve experienced in Venice so far. We’ll definitely come back to try out more of the dishes! </p>
                            <footer class="comment-footer">
                                <div title="3:42 pm">2 May, 2014</div>
                            </footer>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <div class="cbp-item-wrapper ">
                        <div class="comment-inner">
                            <i class="fa fa-quote-right" aria-hidden="true"></i> <header>
                                <h5>Ralph Block</h5>
                                <div class="aa"></div>
                            </header>
                            <p>Visited this Osteria on our first night in Venice, it was quite close to the flat we rented. Didn’t have a reservation, but we showed up right at 18:30 opening and were able to get a table for 2, though parties arriving later without a reservation were turned away. Setting was cozy, food was delicious, </p>
                            <footer class="comment-footer">
                                <div title="3:42 pm">2 May, 2014</div>
                            </footer>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <div class="cbp-item-wrapper">
                        <div class="comment-inner">
                            <i class="fa fa-quote-right" aria-hidden="true"></i><header>
                                <h5>Anonymous</h5>
                                <div class="aa"></div>
                            </header>
                            <p>Started off with the Mixed Seafood Sampler (Venetian Style). Foe our main dish we ordered the Vermicelli with Cuttle Fish Ink Sauce over Polenta and Tuscan Roast Lamb Chops. Everything was delicious.</p>
                            <footer class="comment-footer">
                                <div title="3:41 pm">2 May, 2014</div>
                            </footer>
                        </div>
                    </div>

                </div>
                <!-- BEGIN COLUMNS -->
            </div>
        </div>
  
    <!-- END FOOTER -->
</div>




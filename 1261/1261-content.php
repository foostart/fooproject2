<?php
$url_host = $_SERVER['HTTP_HOST'];

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
                        <span class="m3-content-menu-icon"><img src="img/cookie.JPG" alt="img-reposive"></span>
                        <h3>Brunch</h3>
                        <h5>Today Specials</h5> 
                    </div>
                    <div class="tab-content">
                        <div class="menu">
                            <div class="row">
                                <ul class="nav nav-tabs">
                                    <li ><a data-toggle="tab" href="#home" class="active-tab"><span class="title-text">Fish</span></a></li>
                                    <li><a data-toggle="tab" href="#menu1"><span class="title-text">Meat</span></a></li>
                                    <li><a data-toggle="tab" href="#menu2"><span class="title-text">Vegetarian</span> </a></li>
                                    <li><a data-toggle="tab" href="#menu3"> <span class="title-text">Sandwiches</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="home" class="tab-pane fade in active">
                            <div class="text-menu">
                                <h3>Head on prawns, manila clams & mussels<span class="price">$39</span></h3>
                                <div class="m3-content-menu-food-description">These small shellfish have a sweet flavour and a firm texture.</div>


                            </div>
                            <div class="m3-content-menu-food">
                                <h3>Head on prawns, manila clams & mussels<span class="price">$39</span></h3>
                                <div class="m3-content-menu-food-description">These small shellfish have a sweet flavour and a firm texture.</div>
                            </div>
                            <div class="m3-content-menu-food">
                                <h3>Creamy smoked salmon, leek & potato soup
                                    <span class="price">$9.50</span></h3>
                                <div class="m3-content-menu-food-description">Served in deep bowls with smoked salmon and snipped chives on the top.</div>
                            </div>
                            <div class="m3-content-menu-food">
                                <h3>Alder Grilled Chinook Salmon<span class="price">$33</span></h3>
                                <div class="m3-content-menu-food-description">Candied salmon, basil potato puree, baby kale marsala eggplant confit & balsamic butter sauce.</div>
                            </div>
                           
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3 class="menu-text">Smoked Paprika Hummus   <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
                            <h3 class="menu-text">Smoked Paprika Hummus   <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
                            <h3 class="menu-text">Smoked Paprika Hummus   <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
                            <h3 class="menu-text">Smoked Paprika Hummus   <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
                            <h3 class="menu-text">Smoked Paprika Hummus   <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>



                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3 class="menu-text">Asian chicken & vegetable stir fry   <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
                            <h3 class="menu-text">Asian chicken & vegetable stir fry   <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>   
                            <h3 class="menu-text">Asian chicken & vegetable stir fry   <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>  
                            <h3 class="menu-text">Asian chicken & vegetable stir fry   <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
                            <h3 class="menu-text">Asian chicken & vegetable stir fry   <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>



                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3 class="menu-text">Sun-Dried Tomato Bruschetta     <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
                            <h3 class="menu-text">Sun-Dried Tomato Bruschetta     <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
                            <h3 class="menu-text">Sun-Dried Tomato Bruschetta     <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
                            <h3 class="menu-text">Sun-Dried Tomato Bruschetta     <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
                            <h3 class="menu-text">Sun-Dried Tomato Bruschetta     <span class="price">$33</span></h3>
                            <p>Served in deep bowls with smoked salmon and snipped chives on the top.</p>
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


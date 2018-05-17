<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1285">
    <div class='container'>
        <div class='row'>
            <p>
                <img class="sushi" src="http://<?php echo $url_path ?>/images/sushi-icon-5.svg" alt="sushi">
            </p>
            <div class='col-md-4 col-1'>
                <div>
                    <h4>Opening Times</h4>
                    <span class="lich"></span>
                    <div class="day">
                        <span class="spleft">Week days</span> <span class="spright">9.00 – 18:00</span>
                    </div>
                    <div class="day">
                        <span class="spleft"> Saturday </span>
                        <span class="spright">10.00 – 17:00</span>
                    </div>
                    <div class="day">
                        <span class="spleft">  Sunday </span>
                        <span class="spright"> Closed</span>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-2' >
                <div class='col-2-top'>
                    
                </div>
                <div class='col-2-bottom'>
                    <img src="images/map.PNG" alt=""/>
                    <h3> Directions</h3>
                    <h5> London, UK
                        <br>
                        10, Firs Avenue, Muswell Hill
                        s</h5>
                    <p><a href="#">Wiew on map</a></p>
                </div>
            </div>
            <div class='col-md-4 col-3'>
                <div class="time3">
                    <span class="imgright"></span>
                    <a href="#"> <div class="img1">
                            <img src="http://<?php echo $url_path ?>/images/Foursquare-logo.svg" alt="lg1">
                        </div>
                    </a>
                    <div class="sep"></div>
                    <a href="#"> 
                        <div class="img2">
                            <img src="http://<?php echo $url_path ?>/images/Yelp-logo.svg" alt="lg2">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12" >
                <img  src="http://<?php echo $url_path ?>/images/photo-sushi-7.jpg" alt="sushi">
            </div>
        </div>
    </div>
</div>

<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1281">
    <div class="bar-sushi">
        <div class="container">
        <div class="row">
            <div class="sushi">
                <h1 >SUSHI </h1>
                <h1 >bar</h1>
            </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row detail-sushi">
            <div class="col-md-4 col-sm-4 left">
                <img src="<?php echo $url_path ?>/images/sushi-icon-1.svg" alt="sushi">
                <h3>Futomaki</h3>
                <p> Sushi rice and seafood, etc. rolled in dried seaweed sheets. There are countless varieties of sushi rolls differing in ingredients and thickness. Sushi rolls prepared “inside out” are very popular outside of Japan, but rarely found in Japan.</p>
            </div>
            <div class="col-md-4 col-sm-4 center">
            <div class="content-center">
                <div class="RESER">
                    <h3>RESERVATIONS</h3>
                </div>
                <div class="Making">
                    <p>Making a reservation at Délicious restaurant is easy and takes just a couple of minutes.</p>
                    <h3>+359 562 958</h3>
                    <a href="#" class="btn btn-block1">Block now</a>
                </div>
            </div>
                <img src="<?php echo $url_path ?>/images/sushi-3.png" alt="sushi">
            </div>
            <div class="col-md-4 col-sm-4 right">
                <img src="<?php echo $url_path ?>/images/sushi-icon-2.svg" alt="sushi">
                <h3>Nigiri</h3>
                <p>Small rice balls with fish, shellfish, etc. on top. There are countless varieties of nigirizushi, some of the most common ones being tuna, shrimp, eel, squid, octopus and fried egg.</p>
            </div>
        </div>
    </div>
</div>
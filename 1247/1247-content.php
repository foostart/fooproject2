<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

    <div class="type-1247">
        <div class="cone-top cone"></div>
        <!-- TOP ROW -->
        <div class="vamtam-grid-top">
            <div class="grid-dot">
                <p>❈</p>
            </div>

            <div class="grid-text">
                <p>Since I was a kid I was Massimo Bottura — I was escaping from my older brother under the table in the kitchen and from down there, where my grandmother was defending me, in the meantime she was rolling pasta, i was looking at the world from another point of view. It’s what we do in Osteria Francescana every day.
                </p>
            </div>

            <div class="grid-dot">
                <p>❈</p>
            </div>
            <div class="cone-midle cone"></div>
        </div>
        <!-- END TOP ROW -->

        <!-- BOTTOM ROW -->
        <div class="vamtam-grid-bottom">
            <div class="limit-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <h4 class="color-accent-1">1995</h4>
                            <p>Opens Osteria Francescana, Via Stella 22 Modena Italy</p>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <h4 class="color-accent-1">2002</h4>
                            <p>Michelin Guide One-Michelin-Star. Gambero Rosso Up and Coming Chef Award.</p>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <h4 class="color-accent-1">2016</h4>
                            <p>The world’s 50 restaurants 1st best restaurant in the world. Michelin Guide<br> three-michelin-stars.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BOTTOM ROW -->
        <div class="cone-bottom cone"></div>
    </div>

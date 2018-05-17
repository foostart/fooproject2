<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1285">

    <div style="height: 50px;"></div>
    <div class='container'>
        <div class='row'>
            <p>
                <img src="images/sushi-icon-5.svg">
            </p>
        </div>
        <!--COL 1-->
        <div class='col-md-4 col-1'>
            <div class="vamtam-grid grid-1-3  vamtam-first-level grid-1-3  first unextended no-extended-padding" style="padding-top: 0.05px; padding-bottom: 0.05px; min-height: 331px;" id="vamtam-column-bd027786946bcf680ec73162bbda0c1b"><span class="vamtam-blank-space " style="height:50px"></span>
                <h4 style="text-align: center;">Opening Times</h4>
                <span class="vamtam-blank-space  vamtam-hide-lowres" style="height:10px"></span>
                <table class="vamtam-time-table">
                    <tbody>
                        <tr>
                            <td>Week days</td>
                            <td></td>
                            <td>9.00 – 18:00</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td></td>
                            <td>10.00 – 17:00</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td></td>
                            <td>Closed</td>
                        </tr>
                    </tbody>
                </table>
                <span class="vamtam-blank-space " style="height:10px"></span></div>
        </div>

        <!--COL 2-->
        <div class='col-md-4 col-2' >

            <div class='col-2-top'>
                <span class="icon shortcode theme  use-hover" style="color:#cb7152;font-size:58px !important;"></span>
            </div>
            <div class='col-2-bottom'>
                <h3> Directions</h3>
                <h5> London, UK
                    <br>
                    10, Firs Avenue, Muswell Hill
                    s</h5>

                <p><a href="#">Wiew on map</a></p>
            </div>

            <div class='col-2-hinh'></div>


        </div>
        <!--COL 3-->
        <div class='col-md-4 col-3'>
            <div class="time3">
                <div class="img1">
                    <img src="images/Foursquare-logo.svg" alt="lg1" class="img-responsive" style="margin-left: 100px;">

                </div>
                <div class="sep"></div>
                <div class="img2">
                    <img src="images/Yelp-logo.svg" alt="lg2" class="img-responsive" style="margin-left: 100px;">
                </div>
            </div>


        </div>
        <div class='row'>
            <p>
                <img src="images/photo-sushi-7.jpg">
            </p>
        </div>

    </div>
</div>

<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1254">
    <div class="container">
        <div class="banner">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  first unextended no-extended-padding">
                        <div class="team-member has-content">
                            <div class="thumbnail">
                                <a href="#" title="Brad Farmerie"><img src="images/people-1.jpg"  alt="img-reponsive"> </a>
                                <div class="share-icons clearfix">

                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-twitter" aria-hidden="true"></i></span></a>

                                </div>
                            </div>
                            <div class="team-member-info">
                                <h4>
                                    <a href="#" title="Brad Farmerie">
                                        Brad Farmerie </a>
                                </h4>
                                <h6 class="regular-title-wrapper team-member-position"> CEO &amp; FOUNDER </h6>
                                <div class="team-member-phone"><a href="#" title="Call Brad Farmerie">Tel: 947 577 575</a></div>
                                <div><a href="#" title="email Brad Farmerie">chef@vamtam.com</a></div>
                                <div class="team-member-bio">
                                    <p>Brad Farmerie took a year hiatus from college to move to London and witness firsthand the culinary revolution taking place in the UK.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  unextended no-extended-padding">
                        <div class="team-member has-content">
                            <div class="thumbnail">
                                <a href="#" title="Brad Farmerie"><img src="images/people-2.jpg" alt="img-reponsive"></a>
                                <div class="share-icons clearfix">
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-twitter" aria-hidden="true"></i></span></a>

                                </div>
                            </div>
                            <div class="team-member-info">
                                <h4>
                                    <a href="#" title="Brad Farmerie">
                                        Brad Farmerie </a>
                                </h4>
                                <h6 class="regular-title-wrapper team-member-position"> MANAGER </h6>
                                <div class="team-member-phone"><a href="#" title="Call Brad Farmerie">Tel: 947 577 575</a></div>
                                <div><a href="#" title="email Brad Farmerie">chef@vamtam.com</a></div>
                                <div class="team-member-bio">
                                    <p>Brad Farmerie took a year hiatus from college to move to London and witness firsthand the culinary revolution taking place in the UK.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  unextended no-extended-padding">
                        <div class="team-member has-content">
                            <div class="thumbnail">
                                <a href="#" title="Avroko"><img src="images/people-3.jpg" alt="img-reponsive"></a>
                                <div class="share-icons clearfix">
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-twitter" aria-hidden="true"></i></span></a>

                                </div>
                            </div>
                            <div class="team-member-info">
                                <h4>
                                    <a href="#" title="Avroko">
                                        Avroko </a>
                                </h4>
                                <h6 class="regular-title-wrapper team-member-position"> MASTER CHEF </h6>
                                <div class="team-member-phone"><a href="#" title="Call Avroko">Tel: 947 577 575</a></div>
                                <div><a href="#" title="email Avroko">owners@vamtam.com</a></div>
                                <div class="team-member-bio">
                                    <p>Four partners, 14 years, multiple disciplines rooted in hospitality.
                                        <br> New York-headquartered design-and-concept firm AvroKO.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  unextended no-extended-padding">
                        <div class="team-member has-content">
                            <div class="thumbnail">
                                <a href="#" title="Dan Rafalin"><img src="images/people-4.jpg" alt="img-reponsive"></a>
                                <div class="share-icons clearfix">
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-twitter" aria-hidden="true"></i></span></a>

                                </div>
                            </div>
                            <div class="team-member-info">
                                <h4>
                                    <a href="#" title="Dan Rafalin">
                                        Dan Rafalin </a>
                                </h4>
                                <h6 class="regular-title-wrapper team-member-position"> SOUS CHEF </h6>
                                <div class="team-member-phone"><a href="#" title="Call Dan Rafalin">Tel: 947 577 575</a></div>
                                <div><a href="#" title="email Dan Rafalin">manager@vamtam.com</a></div>
                                <div class="team-member-bio">
                                    <p>Dan Rafalin has been immersed in the culinary world from the beginning of his career when he received a Grand Diplôme in culinary arts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="vamtam-blank-space " style="height:30px"></div>
        <div class="limit-wrapper">
            <div class="row ">
                <div class="hoa" style="text-align: center">
                    <p>❈</p>
                </div>
            </div>
        </div>
       
    </div>
</div>
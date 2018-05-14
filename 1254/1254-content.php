<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?> 

<div class="type-1254">
    <div class="container">
        <!--BANNER-->
        <div class="banner">
            <!--ROW-->
            <div class="row">
                <!--COL-MD-3-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="first">
                        <!--TEAM-->
                        <div class="team-member">
                            <!--THUMBNAIL-->
                            <div class="thumbnail">
                                <a href="#" title="Brad Farmerie"><img src="<?php echo $url_path ?>/images/people-1.jpg"  alt="img-reponsive"> </a>
                                <!--ICONS-->
                                <div class="share-icons clearfix">
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                                    <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
                                </div>
                                <!--/ICONS-->
                            </div>
                            <!--/THUMBNAIL-->
                            <!--INFO-->
                            <div class="team-member-info">
                                <h4>
                                    <a href="#" title="Brad Farmerie">
                                        Brad Farmerie </a>
                                </h4>
                                <h6> CEO &amp; FOUNDER </h6>
                                <a href="#" title="Call Brad Farmerie">Tel: 947 577 575</a>
                                <div><a href="#" title="email Brad Farmerie">chef@vamtam.com</a></div>
                                <p>Brad Farmerie took a year hiatus from college to move to London and witness firsthand the culinary revolution taking place in the UK.</p>
                            </div>
                            <!--/INFO-->
                        </div>
                        <!--/TEAM-->
                    </div>
                </div>
                <!--/COL-MD-3-->
                <!--COL-MD-3-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!--TEAM-->
                    <div class="team-member">
                        <!--THUMBNAIL-->
                        <div class="thumbnail">
                            <a href="#" title="Brad Farmerie"><img src="<?php echo $url_path ?>/images/people-2.jpg" alt="img-reponsive"></a>
                             <!--ICONS-->
                            <div class="share-icons clearfix">
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
                            </div>
                              <!--/ICONS-->
                        </div>
                        <!--/THUMBNAIL-->
                        <!--INFO-->
                        <div class="team-member-info">
                            <h4>
                                <a href="#" title="Brad Farmerie">
                                    Brad Farmerie </a>
                            </h4>
                            <h6> MANAGER </h6>
                            <a href="#" title="Call Brad Farmerie">Tel: 947 577 575</a>
                            <div><a href="#" title="email Brad Farmerie">chef@vamtam.com</a></div>
                            <p>Brad Farmerie took a year hiatus from college to move to London and witness firsthand the culinary revolution taking place in the UK.</p>
                        </div>
                        <!--/INFO-->
                    </div>
                    <!--/TEAM-->
                </div>
                <!--/COL-MD-3-->
                <!--COL-MD-3-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!--TEAM-->
                    <div class="team-member">
                        <!--THUMBNAIL-->
                        <div class="thumbnail">
                            <a href="#" title="Avroko"><img src="<?php echo $url_path ?>/images/people-3.jpg" alt="img-reponsive"></a>
                            <!--ICONS-->
                            <div class="share-icons clearfix">
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
                            </div>
                            <!--/ICONS-->
                        </div>
                        <!--/THUMBNAIL-->
                        <!--INFO-->
                        <div class="team-member-info">
                            <h4>
                                <a href="#" title="Avroko">
                                    Avroko </a>
                            </h4>
                            <h6> MASTER CHEF </h6>
                            <a href="#" title="Call Avroko">Tel: 947 577 575</a>
                            <div><a href="#" title="email Avroko">owners@vamtam.com</a></div>
                            <p>Four partners, 14 years, multiple disciplines rooted in hospitality.
                                <br> New York-headquartered design-and-concept firm AvroKO.</p>
                        </div>
                        <!--/INFO-->
                    </div>
                    <!--/TEAM-->
                </div>
                <!--/COL-MD-3-->
                <!--COL-MD-3-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!--TEAM-->
                    <div class="team-member">
                        <!--THUMBNAIL-->
                        <div class="thumbnail">
                            <a href="#" title="Dan Rafalin"><img src="<?php echo $url_path ?>/images/people-4.jpg" alt="img-reponsive"></a>
                            <!--ICONS-->
                            <div class="share-icons clearfix">
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                                <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
                            </div>
                            <!--/ICONS-->
                        </div>
                        <!--/THUMBNAIL-->
                         <!--INFO-->
                        <div class="team-member-info">
                            <h4>
                                <a href="#" title="Dan Rafalin">
                                    Dan Rafalin </a>
                            </h4>
                            <h6> SOUS CHEF </h6>
                            <a href="#" title="Call Dan Rafalin">Tel: 947 577 575</a>
                            <div><a href="#" title="email Dan Rafalin">manager@vamtam.com</a></div>
                            <p>Dan Rafalin has been immersed in the culinary world from the beginning of his career when he received a Grand Diplôme.</p>
                        </div>
                          <!--/INFO-->
                    </div>
                    <!--/TEAM-->
                </div>
                <!--/COL-MD-3-->
            </div>
            <!--/ROW-->
        </div>
        <!--/BANNER-->
        <div style="height:30px"></div>
        <!--ROW-->
        <div class="row ">
            <div style="text-align: center">
                <p>❈</p>
            </div>
        </div>
        <!--/ROW-->
    </div>
    <!--/END-CONTAINER-->
</div>
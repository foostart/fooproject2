<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1241">
    
    <div class="container">
        <div class="row type-1241-tabs-all">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#all" data-toggle="tab">All<span>8<i class="fa fa-caret-down"></i></span></a></li>
                    <li><a href="#coffee" data-toggle="tab">Coffee Shop<span>4<i class="fa fa-caret-down"></i></span></a></li>
                    <li><a href="#gourmet" data-toggle="tab">Gourmet<span>3<i class="fa fa-caret-down"></i></span></a></li>
                    <li><a href="#recipes" data-toggle="tab">Recipes<span>4<i class="fa fa-caret-down"></i></span></a></li>
                </ul>   
            </div>
            <div class="tab-content">
                <!--all-->
                <div class="tab-pane active row" id="all">
                    <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/1.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/2.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/3.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/4.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/5.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/6.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/7.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/8.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                </div>
                <!--coffe-->
                <div class="tab-pane row" id="coffee">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/3.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/4.jpg" alt="repinsove-img">
                        <span>
                            <a  href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/7.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/8.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    

                </div>
                <!--gourmet-->
                <div class="tab-pane row" id="gourmet">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/2.jpg" alt="repinsove-img">
                        <span>
                            <a  href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/3.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/4.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>

                </div>
                <!--recipes-->
                <div class="tab-pane row" id="recipes">
                    <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/1.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/4.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/5.jpg" alt="repinsove-img">
                        <span>
                            <a href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/7.jpg" alt="repinsove-img">
                        <span>
                            <a  href="">Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<!--banner-->
<div class="type-1276">
    <div class="container">
        <div class="title">
            <h1>Icons</h1>
            <div class="line"></div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="fa fa-internet-explorer"></span>
                                <p>IE</p>
                            </a>
                        </li>
                        <li><a href="#">
                                <span class="fa fa-wheelchair"></span>
                                <p>accessbility2</p>
                            </a></li>
                        <li><a href="#">
                            <span class="fa fa-plane"></span>
                            <p>airplane</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-clock-o"></span>
                            <p>alarm2</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-internet-explorer"></span>
                            <p>angry</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-internet-explorer"></span>
                            <p>apple-fruit</p>
                        </a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <ul>
                        <li><a href="#">
                            <span class="fa fa-internet-explorer"></span>
                            <p>IE</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-wheelchair"></span>
                            <p>accessbility2</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-plane"></span>
                            <p>airplane</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-clock-o"></span>
                            <p>alarm2</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-internet-explorer"></span>
                            <p>angry</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-internet-explorer"></span>
                            <p>apple-fruit</p>
                        </a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <ul>
                        <li><a href="#">
                            <span class="fa fa-internet-explorer"></span>
                            <p>IE</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-wheelchair"></span>
                            <p>accessbility2</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-plane"></span>
                            <p>airplane</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-clock-o"></span>
                            <p>alarm2</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-internet-explorer"></span>
                            <p>angry</p>
                        </a></li>
                        <li><a href="#">
                            <span class="fa fa-internet-explorer"></span>
                            <p>apple-fruit</p>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>


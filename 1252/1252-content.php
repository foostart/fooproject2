<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1252">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-push-1"> 
                <h3>If you want to become a great chef, you have to work with great chefs. And that’s exactly what I did.</h3>
                <h6 class="vamtam-font-style-2 with-color">Michael Strahan</h6>
                <p>❈</p>
            </div>
        </div>
    </div>
</div>        







<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);

?>
<div class="type-1264">
    <div class="container">
    <div class="parallax-bg-wrapper">
        <img class="image-size" src="images/section-bg.jpg">
        <div>
            <h2 class="top">Breakfast & Brunch</h2>
        <hr  class="hr-class top">
        <div class="text">
        <span>Masonry Portfolio Style</span>
        </div>
        </div>
        
    </div>
        </div>
</div>


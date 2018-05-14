<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 
                 <!--Tea-->
    <div class="m5">
        <div class="m5-parallax"></div>
            <div class="m5-container">
                <div class="m5-content">
                    <div class="m5-content-line-left">
                        <div class="m5-content-line"></div>
                    </div>
                        <div class="m5-content-text">
                            <h2>
                                Tea
                            </h2>
                        <div class="m5-content-text-subtitle">Today Specials</div>                            
                    </div>
                    <div class="m5-content-line-right"><div class="m5-content-line"></div></div>
                </div> 
            </div>
        </div>    
   

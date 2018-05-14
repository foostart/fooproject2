<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
    <div class="m2">
        <div class="m2-container">
            <div class="m2-grip">
                <div class="m2-grip-content">
                    <div class="m2-grip-content-1 col-md-4">
                        <div class="m2-grip-content-1-left col-md-10">
                            <h4>Tools</h4>
                            <p>“Professional chefs rely on a battery of tools and equipment. Chefs must be conscious of their kitchen tools when planning a menu and understand their use and production capacity.”</p>
                        </div>
                    </div>
                    <div class="m2-grip-content-2 col-md-4">
                        <div class="img-effect">
                            <img src="images/coffee-img-1.png">
                        </div>
                        <h3>Welcome</h3>
                        <p>“First and foremost I am a chef, whether behind the stove at one of my Northern California restaurants or for the past 15 years in front of the camera on my Food Network cooking shows. Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                    </div>
                    <div class="m2-grip-content-1 m2-grip-content-3 col-md-4">
                        <div class="m2-grip-content-1-left col-md-10">
                            <h4>Food</h4>
                            <p>“Professional chefs rely on a battery of tools and equipment. Chefs must be conscious of their kitchen tools when planning a menu and understand their use and production capacity.”</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>    
</div>
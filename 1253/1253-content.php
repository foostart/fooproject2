<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1253">
    <div class="cheft">
        <div class="limit-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left"></div>
                    <div class="col-md-6 right">
                        <div class="img-banner"><img src="<?php echo $url_path; ?>/images/sushi-icon-4.1.svg" alt="sushi-icon-4.1"></div>
                        <h2>Massimo Bottura</h2>
                        <h6 class="font-color">Our Chef</h6>
                        <p class="font-p">“First and foremost I am a chef, whether behind the stove at one of my Northern California restaurants or for the past 15 years in front of the camera on my Food Network cooking shows. Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                        <div>
                            <img class="size-white" src="<?php echo $url_path; ?>/images/sign-white-1.svg" alt="sign-white"><br>
                            <span class="blank-space "></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
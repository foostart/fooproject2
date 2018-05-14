<?php
include '../config.php';
if (empty($url_path)) {
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
}
?>
<div class="Module-1255">
    <div class="container">
        <div class="row">
            <div class="chef">
                <img src="images/chef.png" alt="img-reposnive">
            </div>
            <div class="text">
                <div class="title">
                    <h3>Join the team!</h3>
                </div>
                <div class="name">
                    <p>We are always looking for dedicated and passionate individuals who are striving to build their career in the hospitality industry.<br>
                        If you would like to be part of this award winning team please visit our Current Vacancies page and apply online.<br>
                        We also offer an internship programme in our Support Office.
                    </p>
                </div>
                <button class="hvr-sweep-to-top"> 
                    Apply Now
                </button>
            </div>
        </div>
    </div>
</div>
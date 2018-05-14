<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1256">
    <form action="#" method="post" class="comment-form">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <textarea id="comment" name="comment" required="" placeholder="Write us something nice or just a funny joke..." rows="2"></textarea>
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
            <input id="author" name="author" type="text" required="required" value="" size="30" placeholder="John Doe">
        </div>

        <div class="comment-form-email col-md-6 col-sm-12 col-xs-12 col-lg-6">
            <span id="comment-note">Your email address will not be published.</span>
            <input id="email" name="email" type="email" required="required" value="" size="30" placeholder="email@example.com">
        </div>

        <p class="form-submit">
            <input name="submit" type="submit" id="submit" class="submit" value="Add message"> 
        </p>
    </form>
</div>






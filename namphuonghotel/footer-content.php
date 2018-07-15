<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<footer>
    <div class="container">
        <h4>Liên hệ với chúng tôi</h4>
        <address>
            <div class="col-md-6">               
                <span><strong>Điện thoại:</strong>0987991693</span>
                <span><strong>Fax:</strong> 0943318881</span>
                <span><strong>Email:</strong><a href="#"> namphuonghotel@gmail.com</a></span>
            </div>
            <div class="col-md-6">
                <div class="social-icons">						
                    <a href="# ">
                            <img src="//bizweb.dktcdn.net/100/139/137/themes/186250/assets/facebook.png?1516858385980" alt=""></a>
                    <a href="# ">
                            <img src="//bizweb.dktcdn.net/100/139/137/themes/186250/assets/twitter.png?1516858385980" alt=""></a>
                    <a href="# ">
                            <img src="//bizweb.dktcdn.net/100/139/137/themes/186250/assets/dribbble.png?1516858385980" alt=""></a>
                    <a href="#">
                            <img src="//bizweb.dktcdn.net/100/139/137/themes/186250/assets/youtube.png?1516858385980" alt=""></a>
                    <a href="# ">
                            <img src="//bizweb.dktcdn.net/100/139/137/themes/186250/assets/vimeo.png?1516858385980" alt=""></a>

            </div>
            </div>
                
        </address>
    </div>
    
</footer>

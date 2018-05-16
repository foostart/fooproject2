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
                        <h6 class="font-color">Our Cheft</h6>
                        <p class="font-p">“Tôi là một đầu bếp, cho dù đằng sau bếp lò tại một trong những nhà hàng ở Bắc California của tôi hoặc trong 15 năm qua trước máy ảnh trên các chương trình nấu ăn. Tạo ra các món ăn và hương vị kết hợp mới mang lại cho đầu bếp và nhà hàng của chúng tôi niềm vui là công việc của tôi và tôi thích nó.”</p>
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
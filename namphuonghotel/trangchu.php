<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/trangchu.less', 'css/trangchu.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trang chủ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet">  
        <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/trangchu.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/trangchu.js"></script>            
        <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
    </head> 
    <body> 
        <script>
                $(document).ready(function(){
                        var swiper = new Swiper('.swiper-container', {
                          slidesPerView: 3,
                          spaceBetween: 30,
                          loop: true,
                          breakpoints: {
                                1024: {
                                  slidesPerView: 3,
                                  spaceBetween: 30,
                                },
                                768: {
                                  slidesPerView: 2,
                                  spaceBetween: 20,
                                },
                                500: {
                                  slidesPerView: 1,
                                  spaceBetween: 10,
                                },
                                320: {
                                  slidesPerView: 1,
                                  spaceBetween: 10,
                                }
                          },
                          navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                          },
                        });
                });
        </script>
        <?php include '../trangchu/trangchu-content.php'; ?>
    </body>
</html>
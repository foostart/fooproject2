<!DOCTYPE html>
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
$less->compileFile('less/1248.less', 'css/1248.css');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>1248</title>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/1248.css" rel="stylesheet" type="text/css"/>
       
        <script src="<?php echo $url_path ?>/js/jquery.js"></script>
        <script src="<?php echo $url_path ?>/js/amination.js"></script>
        <style id="front-all-inline-css" >
            @font-face {
                font-family: 'theme';
                src: url(./fonts/theme-icons.ttf) format('truetype');
                font-weight: normal;
                font-style: normal;
            }
        </style>
    </head>
    <body>
        <?php include '../1248/1248-content.php'; ?>
    </body>
</html>





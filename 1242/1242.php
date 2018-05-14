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
$less->compileFile('less/1242.less', 'css/1242.css');
?>
<html>
    <head>
        <title>1242</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <link href="css/1242.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/font-awesome.min.css">
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo $url_path ?>/js/m1-slide-js.js"></script>
        <script src="<?php echo $url_path ?>/js/modul1-navi-js.js"></script>

    </head> 

    <body> 
        <?php include '../1242/1242-content.php'; ?>
    </body>
</html>
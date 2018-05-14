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
$less->compileFile('less/1247.less', 'css/1247.css');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>1247</title>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/css1.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/css2.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/1247.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <?php include './1247-content.php'; ?>
    </body>
</html>





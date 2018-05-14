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
$less->compileFile('less/1269.less', 'css/1269.css');
?>
<!DOCTYPE html>
<html>

    <head>
        <title>1269</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/1269.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $url_path ?>/font-awesome-4.7.0/css/font-awesome.min.css">


    </head> 

    <body> 
        <?php include '../1269/1269-content.php'; ?>
    </body>
</html>
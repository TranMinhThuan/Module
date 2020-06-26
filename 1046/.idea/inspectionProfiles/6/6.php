
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/6.less', 'css/6.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>modul-6</title>
        <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="./css/swiper.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
        <script src="./js/jquery-2.1.4.min.js"></script>
        <script src="js/6.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/swiper.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="./css/6.css">
    </head>
    <body>
        <?php include './6-content.php'; ?>
    </body>
</html>
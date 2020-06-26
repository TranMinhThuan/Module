<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1046">
    
    <div class="row">
        <div class="col-md-6 content">
            <img src="./images/hinh1.jpg">
            <div class="infor">
                <h2>STAND OUT OF THE CROUD</h2>
                <h3>with our stylish bags & accessories</h3>
                <a href="#">VIEW COLLECTION</a>
            </div>
        </div>

        <div class="col-md-6 content">
            <img src="./images/hinh2.jpg">
            <div class="infor">
                <h2>COMFORT & STYLE</h2>
                <h3>perfect shoes for your active everyday life</h3>
                <a href="#">VIEW COLLECTION</a>
            </div>
        </div>
    </div>

</div>

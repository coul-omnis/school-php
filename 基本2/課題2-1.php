<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            padding:1em;
            margin:1em;
            border-top:1px solid #ccc;
            border-bottom:1px solid #ccc;
        }
    </style>
</head>
<body>
<p>PHP課題2-1</p>
<div>
<p style="border-bottom:1px solid #ccc;">
連想配列で色々やってみる。
</p>
<p>解答例</p>
<?php

$color = ["赤"=>"赤信号","青"=>"青信号","黄"=>"黄信号"];
foreach ($color as $key => $value) {
    echo $key."<br>";
    echo $value."<br>";
}

?>
----------------------<br>
<!-- 上と下の例の違いは？ -->
----------------------<br>
<?php

$color2 = ["赤"=>"赤信号","青"=>"青信号","黄"=>"黄信号"];
foreach ($color2 as $key2) {
    echo $key2."<br>";
    echo $value2."<br>";
}

?>

</div>





</body>
</html>
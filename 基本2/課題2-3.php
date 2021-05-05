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
<p>PHP課題2-3</p>
<div>
<p style="border-bottom:1px solid #ccc;">
値を入力して配列として入れる
</p>
<p>解答例</p>
<form action="課題2-2.php" post="">
<input type="text" name="test" value="test">

</form>
<?php


$color = [1=>"赤信号",5=>"青信号",10=>"黄信号",15=>"紫信号",20=>"緑信号"];
foreach ($color as $key => $value) {
    echo $key."<br>";
    echo $value."<br>";
    echo ($key-1)."<br>";
}
echo $color[2]."<br>"; //エラー
echo $color[5]."<br>";
?>
----------------------<br>

----------------------<br>

<?php

$color2 = [6=>"赤信号",7=>"青信号",8=>"黄信号",0=>"紫信号",1=>"緑信号"];
for ($i=1; $i <= 3; $i++) { 
    // echo $color2[$i]."<br>";
}
var_dump($color2);

$result=array_merge($color,$color2,array());

foreach ($result as $key => $value) {
    echo $value."<br>";
}

var_dump($result);
?>




</div>





</body>
</html>
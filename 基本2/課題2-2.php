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
<form action="課題2-2.php" post="">
<input type="text">

</form>
<?php


$color = [1=>"赤信号",2=>"青信号",3=>"黄信号",4=>"紫信号",5=>"緑信号"];
foreach ($color as $key => $value) {
    echo $key."<br>";
    echo $value."<br>";
    echo ($key-1)."<br>";
}
?>
----------------------<br>

----------------------<br>

<?php
for ($i=1; $i <= 3; $i++) { 
    echo $color[$i]."<br>";
}
?>




</div>





</body>
</html>
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
<p>PHP課題1-1</p>
<div>
<p style="border-bottom:1px solid #ccc;">課題1<br>
$a = $a -$a<br>
上記の結果には数値として必ず何が入りますか？</p>
<p>解答例</p>
<?php 
    
    for ($i=1; $i < 100 ; $i++) { 
        $rand = mt_rand(1,100);
        echo $rand."<br>";
        
    }
?></div>

<div>
<p style="border-bottom:1px solid #ccc;">課題2<br>
$randに乱数を入れて、100回繰り返した数値の平均値を求めて表示してください。<br>
各乱数の値も表示させてください。<br>
乱数は１～１００の整数値で設定してください。</p>
<p>解答例</p>
<?php 
    $min=1;
    $max=100;
    for ($i=1; $i < 100 ; $i++) { 
        $rand = mt_rand($min,$max);
        echo $rand."<br>";
        echo "最小値は".$min."<br>";
        echo "最大値は".$max."<br>";
    }
?></div>





</body>
</html>
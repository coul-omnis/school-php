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
<p>PHP問題1-4</p>
<div>
    <!-- 問題１ -->
    <p style="border-bottom:1px solid #ccc;">問題1<br>
    $randに乱数を入れて、100回繰り返した数値の平均値を求めて表示してください。<br>
    各乱数の値も表示させてください。<br>
    乱数は１～１００の整数値で設定してください。</p>
    <p>解答例</p>
    <?php 
        
        for ($i=1; $i < 100 ; $i++) { 
            $rand = mt_rand(1,100);
            echo $rand."<br>";
            
        }
    ?>
</div>
<!-- 問題２ -->
<div>
    <p style="border-bottom:1px solid #ccc;">問題2<br>
    上記の乱数の最大値と最小値を表示させましょう。<br>
※乱数内の設定した最大値でOK。</p>
    <p>解答例</p>
    <?php 
        $min=1;
        $max=100;
        for ($i=1; $i < 100 ; $i++) { 
            $rand = mt_rand($min,$max);
            echo $rand."<br>";
         
        }
        echo "最小値は".$min."<br>";
        echo "最大値は".$max."<br>";
    ?>
</div>

    <!-- 問題３ -->
    <div>
    <p style="border-bottom:1px solid #ccc;">問題3<br>
    各乱数の値で<br>
１～２５　（小）<br>
２６～５０　（中）<br>
５１～７５　（大）<br>
７６～１００　（特大）<br>
と横に表示させましょう。<br>
<br>
100回繰り返したら乱数の横に表示させてください。</p>
    <p>解答例</p>
    <?php 
        $min=1;
        $max=100;
        for ($i=1; $i < 100 ; $i++) { 
            $rand = mt_rand($min,$max);
            echo $rand;
            switch ($rand) {
                case $rand<=26:
                    echo "(小)"."<br>";
                    break;
                case $rand<=51:
                    echo "(中)"."<br>";
                    break;
                case $rand<=76:
                    echo "(高)"."<br>";
                    break;                    
                default:
                echo "(特大)"."<br>";
                    break;
            }
            
        }
        echo "最小値は".$min."<br>";
        echo "最大値は".$max."<br>";
    ?>
</div>




</body>
</html>
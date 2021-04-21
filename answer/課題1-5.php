<?php session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="jp">
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
<p>PHP問題1-5</p>
<input type="button" value="セッションをクリアする" onclick="location.href='session-death.php'">

<!-- 問題１ -->
<div><!-- ----------------------------- -->
    <p style="border-bottom:1px solid #ccc;">問題1<br>
    変数Aが100になるまで5ずつ増やしていく</p>
    <p>解答例</p>

    <?php
    $a=0;
    while ($a < 100) {
    $a=$a+5;
    echo $a."<br>";
    }
    ?>
</div><!-- ----------------------------- -->







<!-- 問題2 -->
<div><!-- ----------------------------- -->
<p style="border-bottom:1px solid #ccc;">問題2<br>
変数Aの限界値100を乱数50~150で生成し、限界値を変動させる</p>
    <p>解答例</p>

    <?php
    $a=0;
    $rnd=random_int(50,150);
    while ($a < $rnd) {
    $a=$a+5;
    echo $a."<br>";
    }
    ?>
</div><!-- ----------------------------- -->


<!-- 問題3 -->
<div><!-- ----------------------------- -->
<p style="border-bottom:1px solid #ccc;">問題3<br>
変数Aと同じように作った式を、BとCを作る。<br>
Whileを3回使わないように関数を用いて短くしましょう。</p>
    <p>解答例</p>

    <?php
    function rnd_while($name,$min,$max){
        $def=0;
        $rnd=random_int($min,$max);
        while ($def < $rnd) {
        $def=$def+5;
        }
        echo $name."は".$def."で終了<br>";
    }
    rnd_while("A",50,150);
    rnd_while("B",80,130);
    rnd_while("C",90,110);
    ?>
</div><!-- ----------------------------- -->



<!-- 問題4 -->
<div><!-- ----------------------------- -->
<p style="border-bottom:1px solid #ccc;">問題4<br>
問題３で作ったABCの合計値が300以上なら〇、それ以外は×と表示させる</p>
    <p>解答例</p>

    <?php
    function rnd_while2($name,$min,$max){
        $def=0;
        $rnd=random_int($min,$max);
        while ($def < $rnd) {
        $def=$def+5;
        }
        echo $name."は".$def."で終了<br>";
        return $def;
    }
    $a_sum=rnd_while2("A",50,150);
    $b_sum=rnd_while2("B",80,130);
    $c_sum=rnd_while2("C",90,110);

    if(($a_sum+$b_sum+$c_sum)>=300):
        echo $a_sum+$b_sum+$c_sum;
        echo "〇";
    else:
        echo $a_sum+$b_sum+$c_sum;
        echo "×";
    endif;

    

    ?>
</div><!-- ----------------------------- -->



<!-- 問題5 -->
<div><!-- ----------------------------- -->
<p style="border-bottom:1px solid #ccc;">問題5<br>
問題４で作った合計値の部分をフォームから入力して、合計値を任意の数値に設定させる。</p>
    <p>解答例</p>


    <form action="課題1-5.php" method="get">
        <input type="text" name="goukei" placeholder="合計値となる基準の数値を入力">
        <input type="submit">
    </form>

    <?php

if (strlen($_GET["goukei"])) {
    function rnd_while3($name,$min,$max){
        $def=0;
        $rnd=random_int($min,$max);
        while ($def < $rnd) {
        $def=$def+5;
        }
        echo $name."は".$def."で終了<br>";
        return $def;
    }
    $a_sum=rnd_while3("A",50,150);
    $b_sum=rnd_while3("B",80,130);
    $c_sum=rnd_while3("C",90,110);

    if(($a_sum+$b_sum+$c_sum)>=$_GET["goukei"]):
        echo $a_sum+$b_sum+$c_sum;
        echo "〇<br>";
        echo "設定した値は".$_GET["goukei"];
    else:
        echo $a_sum+$b_sum+$c_sum;
        echo "×<br>";
        echo "設定した値は".$_GET["goukei"];
    endif;

}

 
    

    ?>
</div><!-- ----------------------------- -->

</body>
</html>
<?php session_start();
error_reporting(E_ALL ^ E_NOTICE);
?>

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
 <!-- 問題１ -->
 <input type="button" value="セッションをクリアする" onclick="location.href='session-death.php'">
<div>
    <p style="border-bottom:1px solid #ccc;">問題1<br>
    「はい」「いいえ」のアドベンチャーゲームを作ってください。</p>
    <p>解答例</p>
    <form action="課題1-4.php" method="get">
        <input type="hidden" name="sentaku">
        <input type="radio" name="sentaku" value="はい">はい
        <input type="radio" name="sentaku" value="いいえ">いいえ
        <input type="submit">
    </form>
    <?php 
        if(@$_GET["sentaku"]=="はい"):
            echo "好きです";
        elseif(@$_GET["sentaku"]=="いいえ"):
            echo "嫌いです";
        else:
        endif;
    ?>
</div>


 <!-- 問題2 -->
 <div>
    <p style="border-bottom:1px solid #ccc;">問題2<br>
    キャラクターの変数を作り、「はい」「いいえ」による選択肢で<br>好感度が上下するプログラムを作ってください。</p>
    <p>解答例</p>
    <form action="課題1-4.php" method="get">
        <input type="hidden" name="sentaku2">
        <input type="radio" name="sentaku2" value="はい">はい
        <input type="radio" name="sentaku2" value="いいえ">いいえ
        <input type="submit">
    </form>

    <?php
    $chr= "name";
    @$_SESSION["koukando"];
    if(@$_SESSION["koukando"]==0 || is_null(@$_SESSION["koukando"])):
    else:
        if(@$_GET["sentaku"]=="はい"):
        echo "好きです"."<br>";
        @$_SESSION["koukando"]=$_SESSION["koukando"]+15;
        echo "現在の好感度は".$_SESSION["koukando"]."です。";        

        elseif(@$_GET["sentaku"]=="いいえ"):
            echo "嫌いです"."<br>";
            $_SESSION["koukando"]=$_SESSION["koukando"]-15;
            echo "現在の好感度は".$_SESSION["koukando"]."です。";
       
        else:
            echo "特に好感度".$_SESSION["koukando"]."から変化はありません。";
        endif;
        
    endif;
    ?>
</div>




 <!-- 問題3 -->
 <div>
    <p style="border-bottom:1px solid #ccc;">問題3<br>
    問題２にあったキャラクターの好感度の最低値（-100）と最高値（+100）を作り<br>
初期値０で初めて、－100になったらゲームオーバー。<br>＋100になったらエンディングになるようにプログラムを組んでください。
</p>
    <p>解答例</p>
    <form action="課題1-4.php" method="get">
        <input type="hidden" name="sentaku3">
        <input type="radio" name="sentaku3" value="はい">はい
        <input type="radio" name="sentaku3" value="いいえ">いいえ
        <input type="submit">
    </form>

    <?php
    $chr= "name";
    @$_SESSION["koukando2"];
    if(@$_SESSION["koukando2"]==0 || is_null(@$_SESSION["koukando2"])):
    else:
        if(@$_GET["sentaku"]=="はい"):
            echo "好きです"."<br>";
            $_SESSION["koukando2"]=$_SESSION["koukando2"]+15;
            echo "現在の好感度は".$_SESSION["koukando2"]."です。";

            if( $_SESSION["koukando2"]>=100):
                echo "ハッピーエンド"."<br>";
            endif;

        elseif(@$_GET["sentaku"]=="いいえ"):
            echo "嫌いです"."<br>";
            @$_SESSION["koukando2"]=$_SESSION["koukando2"]-15;
            echo "現在の好感度は".$_SESSION["koukando2"]."です。";
            if( $_SESSION["koukando2"]<=-100):
                echo "バッドエンド"."<br>";
            endif;
        else:
            echo "特に好感度".$_SESSION["koukando2"]."から変化はありません。";
        endif;
    endif;
    ?>
</div>





</body>
</html>
<?php session_start() ?>

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
<div>
    <p style="border-bottom:1px solid #ccc;">問題1<br>
    「はい」「いいえ」のアドベンチャーゲームを作ってください。</p>
    <p>解答例</p>
    <form action="課題1-4.php" method="get">
        <input type="hidden" name="sentaku">
        <input type="radio" name="sentaku" value="はい">
        <input type="radio" name="sentaku" value="いいえ">
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

 <!-- 問題１ -->
 <div>
    <p style="border-bottom:1px solid #ccc;">問題1<br>
    キャラクターの変数を作り、「はい」「いいえ」による選択肢で<br>好感度が上下するプログラムを作ってください。</p>
    <p>解答例</p>
    <form action="課題1-4.php" method="get">
        <input type="hidden" name="sentaku">
        <input type="radio" name="sentaku" value="はい">
        <input type="radio" name="sentaku" value="いいえ">
        <input type="submit">
    </form>

    <?php
    $chr= "name";
    $_SESSION["koukando"];
    var_dump($_SESSION["koukando"]);
        if(@$_GET["sentaku"]=="はい"):
            echo "好きです"."<br>";
            $_SESSION["koukando"]=$_SESSION["koukando"]+1;
            echo "現在の好感度は".$_SESSION["koukando"]."です。";
        elseif(@$_GET["sentaku"]=="いいえ"):
            echo "嫌いです"."<br>";
            $_SESSION["koukando"]=$_SESSION["koukando"]-1;
            echo "現在の好感度は".$_SESSION["koukando"]."です。";
        else:
            echo "特に好感度".$_SESSION["koukando"]."から変化はありません。";
        endif;

    ?>
</div>





</body>
</html>
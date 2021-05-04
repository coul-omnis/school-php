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
   printとechoの違い</p>
    <p>解答例</p>
    <?php

// if(echo "a"."2"){ //エラーが出る。echoは条件式に当てはまらない為
// }
echo "test","test"; //エラーは出ない

// print "test","test"; //カンマではエラーが出る（複数指定ができないため）

print "test"."test"; //結合演算子なら式の為、可能

if(print "a"."2"){ //printは式なのでifの中に条件式として入れる事が可能。
    return false;
}
?>





</div><!-- ----------------------------- -->


<!-- 問題２ -->
<div><!-- ----------------------------- -->
    <p style="border-bottom:1px solid #ccc;">問題2<br>
   var_dumpの効率的な使い方</p>
    <p>解答例</p>
    <?php
        $arr = ["1","2","3","4"]; //配列入力string
        echo "<pre>";
        var_dump($arr); //var_dumpをきれいに整形する場合<pre>で囲む。出力だが、あくまでデバッグ用
        echo "</pre>";
        //  echo "<br>";
        //  echo "<br>";
        print_r($arr); //print_rは関数。var_dumpに近い形で出す事ができる。出力であることが重要
        print $arr; //エラーが出る。
        // echo "<br>";
        // echo "<br>";

         foreach ($arr as $key => $value) {//上記出力とは違い、基本的に中身の値を抜き出す時
             echo $key;
         }

    ?>





</div><!-- ----------------------------- -->

<?php 

?>
<!-- <p>この違いはなんでしょうか？</p> -->


</body>
</html>
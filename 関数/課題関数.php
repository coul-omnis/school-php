
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

<?php


function fizzBuzz(int $i): string
{
    $result = '';
 
    if ($i % 3 === 0) {
        $result .= 'Fizz';
    }
 
    if ($i % 5 === 0) {
        $result .= 'Buzz';
    }
 
    if (($i % 3 !== 0) && ($i % 5 !== 0)) {
        $result .= (int)$i;
    }
 
    return $result;
}
 
for ($i = 1; $i <= 20; $i++) {
    echo fizzBuzz($i), PHP_EOL;
}
?>
</div>





</body>
</html>
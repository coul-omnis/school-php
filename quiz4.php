<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    function quiz($title, $name, $choice){
        $answer = $choice[0];
        shuffle($choice);

    ?>
        <form action="" method="POST">
        <dl>
            <dt><?php echo $title; ?></dt>

            <?php foreach($choice as $value){ ?>
                <dd>
                    <input type="radio" name="$name" value="<?php echo $value; ?>"><?php echo $value; ?>
                </dd>
            <?php } ?>
            <input type="hidden" name="answer" value="<?php echo $answer ?>">
            <input type="submit" value="回答する">
            </form>
        </dl>


    <?php
    if(isset($question)&& isset($answer)){
        $question = $_POST['name'];
        $answer = $_POST['answer'];

        if($question == $answer){
            $result = "正解";
        }elseif($question == null){
            $result = "nullです";
        }else{
            $result = "不正解";
        }
        

        echo "<h2>クイズの結果</h2>";
        echo $result; 
    };?>
    
    <?php
    }

    quiz(
        "お酢に卵を殻ごといれると卵はどうなるでしょう？",
        "question1",
        [
        "透明な卵になる",
        "鏡のようになんでもうつる卵になる",
        "卵が溶けてなくなる",
        "卵が石のように堅くなる",
        ]);

    quiz(
        "しゃっくりはある調味料をなめると止まります。ある調味料とはなんでしょう？？",
        "question1",
        [
        "砂糖",
        "お酢",
        "醤油",
        ]);
        
   ?>
        

</body>
</html>
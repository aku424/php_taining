<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
        echo "テスト";
        echo "テスト２";
        echo "phpの環境構築をしました";
    ?>
    <?php
        echo "</br>";
        echo 2 + 3;
        echo "</br>";
        echo 6 * 6;
        echo "</br>";
        echo 9 / 3;
        echo "</br>";
        echo 12 % 6;
        echo "</br>";
        echo (12 % 6) +3 *6;
    ?>
    </p>
    <h1>
        <?php
        function circleArea($radius){
            $pai =3.14;
            $area = $pai * $radius *$radius;
            $double_area = $area *2;
            echo $double_area;
        }
        echo circleArea(3);
        ?>
    </h1>
    <h2>
        <?php
            function Area($radius){
                $pai = 3.14;
                $area = $pai * $radius * $radius;
                return $area;
            }
            echo Area(2);
            echo "</br>";
            echo Area(4);
            echo "</br>";
            echo Area(7);
            echo "</br>";
            echo Area(5);
        ?>
    </h2>
    <h1>
        <?php
            $scores = [43,356,90,89];
            function testScore($score){
                echo 'テストの点数は'.$score.'点です';
                echo "</br>";
                if($score > 80){
                    echo "おめでとう";
                }elseif($score >= 60){
                    echo "あと少し！";
                }else{
                    echo "頑張ろう！";
                }
            }
            echo testScore($scores[1]);
        ?>
    </h1>
    <h1>
    <?php
    $score = 80;
    if ($score == 80) {
        echo 'scoreは80';
        echo '</br>';
    }
    if ($score >= 80) {
        echo 'scoreは80以上';
        echo '</br>';
    }
    if ($score != 79) {
        echo 'scoreは79ではない';
        echo '</br>';
    }
    ?>
    </h1>
    <h1>
        <?php
            $scores = [1,3,6,4];
            $scores[] = 99;
            echo $scores[3];
            echo '</br>';
            echo $scores[4];
            echo '</br>';
            array_push($scores , 40); 
            echo $scores[5];
            $scores[] = 99;
            echo '</br>';
            echo $scores[6];
            echo '</br>';
            ?>
    </h1>
    <h1>
        <?php
            $scores = [43,356,90,89];
            foreach ($scores as $score) {
                echo 'テストの点数は'.$score.'点です';
                echo "</br>";
                if($score > 80){
                    echo "おめでとう";
                }elseif($score >= 60){
                    echo "あと少し！";
                }else{
                    echo "頑張ろう！";
                }
                echo "</br>";
                echo "-----------------------";
                echo "</br>";
            }
        ?>
    </h1>
    <h1>
        <?php
            $scores =[
                "国語" =>66,
                "りか" =>63,
                "算数" =>87,
                "社会" =>61,
            ];
            echo $scores["社会"]."点です";
            echo "</br>";
            echo $scores["国語"]."点です";
            echo "</br>";
            $scores["国語"] = 99;
            echo $scores["国語"]."点です";
            echo "</br>";
            $scores["英語"] = 909;
            echo $scores["英語"]."点です";
            echo "</br>";
        ?>
    </h1>
</body>
</html>
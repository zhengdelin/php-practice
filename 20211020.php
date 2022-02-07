<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>1110734020_20211020</title>
</head>
<body>
    <?php
        $convert=function ($t,$s){
            return ($s==1)?($t*(9/5)+32):($t-32)*(5/9);
        };
        $x=0;
        $y=2;
        $z= ($y==1)?"F":"C";
        $z2= ($y==1)?"C":"F";
        echo $y==1? "攝氏{$x}度{$z} = 華氏{$convert($x,$y)}度{$z2}<br>":"華氏{$x}度{$z} = 攝氏{$convert($x,$y)}度{$z2}<br>";


    ?>
</body>
</html>
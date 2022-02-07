<?php
$arr = ['2', '4', '5', '10', '2+', '8', '17'];
$x = 27;
$y = 21;
$ans = [];
// print(count($ans));
$c = 0;
for ($i = 0; $i < 7; $i++) {
    $ans['x'][$c] = [$arr[$i]];
    $ans['y'][$c] = array_diff($arr, $ans['x'][$c]);
    $c++;
}
for ($i = 0; $i < 7; $i++) {
    for ($j = $i + 1; $j < 7; $j++) {
        $ans['x'][$c] = [$arr[$i], $arr[$j]];
        $ans['y'][$c] = array_diff($arr, $ans['x'][$c]);
        $c++;
    }
}
for ($i = 0; $i < 7; $i++) {
    for ($j = $i + 1; $j < 7; $j++) {
        for ($z = $j + 1; $z < 7; $z++) {
            $ans['x'][$c] = [$arr[$i], $arr[$j], $arr[$z]];
            $ans['y'][$c] = array_diff($arr, $ans['x'][$c]);
            $c++;
        }
    }
}
for ($i = 0; $i < 7; $i++) {
    for ($j = $i + 1; $j < 7; $j++) {
        for ($z = $j + 1; $z < 7; $z++) {
            for ($v = $z + 1; $v < 7; $v++) {
                $ans['x'][$c] = [$arr[$i], $arr[$j], $arr[$z],$arr[$v]];
                $ans['y'][$c] = array_diff($arr, $ans['x'][$c]);
                $c++;
            }
        }
    }
}
for ($i = 0; $i < 7; $i++) {
    for ($j = $i + 1; $j < 7; $j++) {
        for ($z = $j + 1; $z < 7; $z++) {
            for ($v = $z + 1; $v < 7; $v++) {
                for($b=$v+1;$b<7;$b++){
                    $ans['x'][$c] = [$arr[$i], $arr[$j], $arr[$z],$arr[$v],$arr[$b]];
                    $ans['y'][$c] = array_diff($arr, $ans['x'][$c]);
                    $c++;
                }
                
            }
        }
    }
}
for ($i = 0; $i < 7; $i++) {
    for ($j = $i + 1; $j < 7; $j++) {
        for ($z = $j + 1; $z < 7; $z++) {
            for ($v = $z + 1; $v < 7; $v++) {
                for($b=$v+1;$b<7;$b++){
                    for($n=$b+1;$n<7;$n++){
                        $ans['x'][$c] = [$arr[$i], $arr[$j], $arr[$z],$arr[$v],$arr[$b],$arr[$n]];
                        $ans['y'][$c] = array_diff($arr, $ans['x'][$c]);
                        $c++;
                    }
                }
                
            }
        }
    }
}
for ($i = 0; $i < 7; $i++) {
    for ($j = $i + 1; $j < 7; $j++) {
        for ($z = $j + 1; $z < 7; $z++) {
            for ($v = $z + 1; $v < 7; $v++) {
                for($b=$v+1;$b<7;$b++){
                    for($n=$b+1;$n<7;$n++){
                        for($m=$n+1;$m<7;$m++){
                            $ans['x'][$c] = [$arr[$i], $arr[$j], $arr[$z],$arr[$v],$arr[$b],$arr[$n],$arr[$m]];
                            $ans['y'][$c] = array_diff($arr, $ans['x'][$c]);
                            $c++;
                        }
                        
                    }
                }
                
            }
        }
    }
}
$a = [];
for($i=0;$i<count($ans['x']);$i++){
    $countx=0;$county=0;
    foreach($ans['x'][$i] as $z){
        if($z=='2+'){
            $countx+=2;
        }else{
            $countx+=$z;
        }
        echo $z.' ';
    }
    echo '=>';
    foreach($ans['y'][$i] as $z){
        if($z=='2+'){
            $county+=2;
        }else{
            $county+=$z;
        }
        echo $z.' ';
    }
    echo '<br>';
    if ($countx == $x && $county == $y) {
        $a[] = [$ans['x'][$i], $ans['y'][$i]];
    }
}

echo '<br>-----------答案------------<br>';
for($i=0;$i<count($a);$i++){
    $countx=0;$county=0;
    foreach($a[$i][0] as $z){
        echo $z.' ';
    }
    echo '=>';
    foreach($a[$i][1] as $z){
        echo $z.' ';
    }
    echo '<br>';
}

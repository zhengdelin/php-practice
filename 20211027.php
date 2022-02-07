<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>1110734020_20211020</title>
</head>
<body>
    <?php
        $x=array('Joe'=>array(88,58),
                 'Jane'=>array(75,67),
                 'Mary'=>array(46,94));
        $sum=0;$count=0;
        foreach(array_keys($x) as $i){
            echo $i.'的總分為'.array_sum($x[$i]).'分, 平均為'.array_sum($x[$i])/count($x[$i]).'分<br>';
            $sum+=array_sum($x[$i]);
            $count+=count($x[$i]);
        }
        echo '全部的總分為'.$sum.'分, 平均為'.$sum/$count.'分<br>';


    ?>
</body>
</html>
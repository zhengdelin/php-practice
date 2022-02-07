<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>1110734020_20211020</title>
</head>

<body>
    <?php
    header("Refresh: 5");
    $b = '2021-12-1 10:00:00';
    $a = strtotime('now');
    $date = (int)((strtotime($b) - $a) / 86400);
    $hour = (int)((strtotime($b) - $a) % 86400 / 3600);
    $minute = (int)((strtotime($b) - $a) % 3600 / 60);
    $second = (strtotime($b) - $a) % 60;
    $s = $date . ' ' . $hour . ' ' . $minute . ' ' . $second . '<br>';
    echo $s;



    ?>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>form.php</title>
</head>
<body>
    <?php 
        $name=$_POST["name"];
        $gender=$_POST["gender"];
        $education=$_POST["education"];
        $salary=$_POST["salary"];
        echo "名字:" . $name . "<br>" 
             ."性別:" . $gender . "<br>"
             ."最高學歷:" . $education . "<br>"
             ."年收入:" . $salary . "<br>";
    ?>
</body>
</html>
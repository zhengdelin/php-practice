<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>title.php</title>
</head>
<body>
<?php
$b=6;
$e=18;
for($i=$b; $i<=$e; $i += 3){
?>
<p style="font-size:<?php echo $i;?>pt">
歡迎使用PHP網頁程式設計
<?php
print "</p>";
}?>

</body>
</html>
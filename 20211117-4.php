<?php
$user = isset($_POST['user']) ? $_POST['user'] : 'user';
$password = isset($_POST['password']) ? $_POST['password'] : '0000';
$occupation = isset($_POST['occupation']) ? $_POST['occupation'] : 'none';
$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : '2000-01-01';
$int = isset($_POST['int']) ? $_POST['int'] : '';
echo "使用者:$user<br>密碼:$password<br>職業:$occupation<br>生日:$birthday<br>興趣:";
foreach ($int as $i) {
    echo $i . ' ';
}
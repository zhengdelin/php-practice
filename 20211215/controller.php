<?php
$link = new mysqli('localhost', "root", "A1234567", 'library');
if (!$link) {
    echo '連接失敗';
    exit;
}
$action = $_POST['action'];
if ($action == 'add') {
    $bookid = isset($_POST['bookid']) ? $_POST['bookid'] : '';
    $booktitle = isset($_POST['booktitle']) ? $_POST['booktitle'] : '';
    $bookprice = isset($_POST['bookprice']) ? $_POST['bookprice'] : '';
    $bookauthor = isset($_POST['bookauthor']) ? $_POST['bookauthor'] : '';
    $sql = "INSERT INTO books values('$bookid','$booktitle','$bookprice','$bookauthor')";
    $link->query($sql);
    header('Location:index.php');
}
if ($action == 'edit') {
    $bookid = isset($_POST['bookid']) ? $_POST['bookid'] : '';
    $booktitle = isset($_POST['booktitle']) ? $_POST['booktitle'] : '';
    $bookprice = isset($_POST['bookprice']) ? $_POST['bookprice'] : '';
    $bookauthor = isset($_POST['bookauthor']) ? $_POST['bookauthor'] : '';
    // echo $bookid.' '.$booktitle.' '.$bookprice.' '.$bookauthor;
    $sql = "UPDATE books SET booktitle = '$booktitle',bookprice = '$bookprice',bookauthor = '$bookauthor' WHERE bookid = '$bookid'";
    $link->query($sql);
    header('Location:index.php?Pages=' . $_POST['Pages']);
}
if ($action == 'delete') {
    $bookid = isset($_POST['bookid']) ? $_POST['bookid'] : '';
    $sql = "DELETE From books WHERE bookid = '$bookid'";
    $link->query($sql);
    header('Location:index.php');
}

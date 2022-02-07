<html>

<head>
    <title>page-<?php echo isset($_GET['Pages']) ? $_GET['Pages'] : 1; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            font-family: 'dfkai-sb';
            font-size: 1.2rem;
        }

        table {
            margin: 30px;
            border-collapse: separate;
        }

        table,
        th,
        td,
        tr {
            border-width: 1px;
            border-style: double;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center">


</body>

</html>
<?php
$link = new mysqli('localhost', "root", "A1234567", 'library');
if (!$link) {
    echo '連接失敗';
    exit;
}
$per = 3;
$pages = isset($_GET['Pages']) ? $_GET['Pages'] : 1;
$result = $link->query("select bookid as 書號,booktitle as 書名,bookprice as 書價,bookauthor as 作者 from books");
$data = [];
while ($r = $result->fetch_assoc()) {
    $data[] = $r;
}
$total = ceil(count($data) / $per);
echo "<div class='d-flex flex-column align-items-center'><table border='1' class='text-center'><tr>";
foreach (array_keys(current($data)) as $i) {
    echo "<th>$i</th>";
}
// print_r($data);
echo "<th>Action</th></tr>";
for ($i = ($pages - 1) * $per, $z = 0; $i < ($per * $pages) && $i < count($data) && $z < $per; $i++, $z+2) {
    echo "<tr>";
    foreach ($data[$i] as $j) {
        echo "<td>$j</td>";
    }
    echo "<td class='d-flex justify-content-center align-center p-1'>";
    echo "<form action='edit.php' method='POST' class='m-0'>";
    echo "<input type='submit' name='edit' value='編輯''>";
    echo "|";
    echo "<input type='hidden' name='bookid' value={$data[$i]['書號']}>";
    echo "<input type='hidden' name='Pages' value=$pages></form>";
    $onsubmit='return confirm("您確定要刪除嗎？")?true:false';
    echo "<form action='controller.php' method='POST' class='m-0' onsubmit='$onsubmit'>";
    echo "<input type='hidden' name='bookid' value={$data[$i]['書號']}>";
    echo "<input type='hidden' name='action' value='delete'>";
    echo " <input type='submit' name='delete' value='刪除'>";
    echo "</form></td></tr>";
}
echo "</table><div>";
if ($pages != 1) {
    echo "<a href='index.php?Pages=" . ($pages - 1) . "'>上一頁</a>| ";
}
for ($i = 1; $i <= $total; $i++) {
    if ($i != $pages)
        echo "<a href='index.php?Pages=$i'>$i</a> ";
    else
        echo "$i ";
}
if ($pages < $total) {
    echo "|<a href='index.php?Pages=" . ($pages + 1) . "'>下一頁</a>";
}
echo "</div>";
echo "<div><a href='add.php'>新增</a>|<a href='search.php'>查詢</a></div>";
echo "</div>";
?>
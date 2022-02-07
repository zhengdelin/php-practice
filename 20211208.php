<html>

<head>
    <title>page-<?php echo isset($_GET['Pages']) ? $_GET['Pages'] : 1;?></title>
    <style>
        *{
            font-family: 'dfkai-sb';
            font-size: 1.2rem;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        body > div{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        table{
            text-align: center;
            width: 50vw;
            margin: 30px;
        }
    </style>
</head>

<body>

</body>

</html>
<?php
$link = new mysqli('localhost', "root", "A1234567", 'library');
if (!$link) {
    echo '連接失敗';
    exit;
}
$per = 2;
$pages = isset($_GET['Pages']) ? $_GET['Pages'] : 1;
$result = $link->query("select bookid as 書號,booktitle as 書名,bookprice as 書價,bookauthor as 作者 from books");
$data = [];
while ($r = $result->fetch_assoc()) {
    $data[] = $r;
}
$total = ceil(count($data) / $per);
echo "<div><table border='1'><tr>";
foreach(array_keys(current($data)) as $i){
    echo "<th>$i</th>";
}
echo "</tr>";
for ($i = ($pages - 1) * $per; $i < ($per * $pages); $i++) {
    echo "<tr>";
    foreach($data[$i] as $j){
        echo "<td>$j</td>";
    }
    echo "</tr>";
}
echo "</table><div>";
if($pages!=1){
    echo "<a href='20211208.php?Pages=".($pages-1)."'>上一頁</a>| ";
}
for($i=1;$i<=$total;$i++){
    if($i!=$pages)
        echo "<a href='20211208.php?Pages=$i'>$i</a> ";
    else
        echo "$i ";
}
if($pages<$total){
    echo "|<a href='20211208.php?Pages=".($pages+1)."'>下一頁</a>";
}
echo "</div></div>";

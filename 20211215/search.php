<?php
$link = new mysqli('localhost', "root", "A1234567", 'library');
if (!$link) {
    echo '連接失敗';
    exit;
}
$data = [];
$booktitle = isset($_POST['booktitle']) ? $_POST['booktitle'] : '';
$bookauthor = isset($_POST['bookauthor']) ? $_POST['bookauthor'] : '';
if ($booktitle && $bookauthor) {
    $result = $link->query("select bookid as 書號,booktitle as 書名,bookprice as 書價,bookauthor as 作者 from books where booktitle LIKE '%$booktitle%' and bookauthor LIKE '%$bookauthor%'");
} elseif ($booktitle) {
    $result = $link->query("select bookid as 書號,booktitle as 書名,bookprice as 書價,bookauthor as 作者 from books where booktitle LIKE '%$booktitle%'");
} else if($bookauthor){
    $result = $link->query("select bookid as 書號,booktitle as 書名,bookprice as 書價,bookauthor as 作者 from books where bookauthor LIKE '%$bookauthor%'");
}
if (!$booktitle && !$bookauthor) {
}else{
while ($r = $result->fetch_assoc()) {
    $data[] = $r;
}
}

?>
<html>

<head>
    <!--  -->
    <title>add</title>
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
    <script>
        function check() {
            if (document.forms['search']['booktitle'].value == '' && document.forms['search']['bookauthor'].value == '') {
                alert('請輸入資料!');
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class='d-flex flex-column align-items-center'>
        <table border='1' class='text-center'>
            <form action='search.php' method='POST' class='m-0' onsubmit="return check()" name='search'>
                <tr>
                    <td colspan='5'>
                        <label for="booktitle">書名:</label>
                        <input type="text" name="booktitle" id="booktitle">
                    </td>
                    <td colspan='5'>
                        <label for="bookauthor">作者:</label>
                        <input type="text" name="bookauthor" id="bookauthor">
                    </td>
                    <td colspan='1' >
                        <input type="submit" value="查詢">
                    </td>
                    <td colspan='1' >
                        <input type="reset" value="清除">
                    </td>
                    <td colspan='1' >
                        <input type="button" name="cancel" value="返回" onclick="location.href='index.php'" />
                    </td>
                </tr>
                <input type="hidden" name="action" value="search">
            </form>
            <?php
            if (!empty($data)) {
                $z = 0;
                $x = [1, 4, 1, 4];
                echo '<tr>';
                foreach (array_keys(current($data)) as $i) {
                    echo "<th colspan='{$x[$z]}'>$i</th>";
                    $z++;
                }

                echo '</tr>';
                foreach ($data as $i) {
                    $z = 0;
                    echo "<tr>";
                    foreach ($i as $j) {
                        echo "<td colspan='{$x[$z]}'>$j</td>";
                        $z++;
                    }
                    echo "</tr>";
                }
            } else {
                if (!$booktitle && !$bookauthor) {
                    echo "<tr><td colspan='13'>查無資料</td></tr>";
                } elseif ($booktitle) {
                    echo "<tr><td colspan='13'>查無書名:$booktitle</td></tr>";
                } else {
                    echo "<tr><td colspan='13'>查無作者:$bookauthor</td></tr>";
                }
                
            }

            ?>
        </table>

    </div>
</body>

</html>
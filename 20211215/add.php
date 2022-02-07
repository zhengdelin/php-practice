<?php
$link = new mysqli('localhost', "root", "A1234567", 'library');
if (!$link) {
    echo '連接失敗';
    exit;
}
$id = $link->query("select max(bookid) from books")->fetch_assoc()['max(bookid)'];
$id = 'B' . ((substr($id, 1) + 1) < 10 ? '0' . (substr($id, 1) + 1) : (substr($id, 1) + 1));

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
            if (document.forms['add']['bookauthor'].value == '') {
                document.forms['add']['bookauthor'].value = '匿名';
            }
            if (document.forms['add']['booktitle'].value == '') {
                alert('書名不可為空!');
                return false;
            } else {
                return confirm('您確定要新增嗎？') ? true : false;
            }
        }
    </script>
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class='d-flex flex-column align-items-center'>
        <form action='controller.php' method='POST' class='m-0' onsubmit="return check()" name='add'>
            <table border='1' class='text-center'>
                <tr>
                    <td colspan="2">
                        <label for="bookid">(自動新增)書號:<?php echo $id ?></label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="booktitle">書名:</label>
                        <input type="text" name="booktitle" id="booktitle" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="bookprice">書價:</label>
                        <input type="text" name="bookprice" id="bookprice" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="bookauthor">作者:</label>
                        <input type="text" name="bookauthor" id="bookauthor" >
                    </td>
                </tr>
                <tr colspan="2">
                    <td>

                        <input type="button" name="cancel" value="取消" onclick="location.href='index.php'" />
                    </td>
                    <td>
                        <input type="submit" value="新增">
                    </td>
                </tr>
                <input type="hidden" name="bookid" value="<?php echo $id; ?>">
                <input type="hidden" name="action" value="add">

            </table>
        </form>
    </div>
</body>

</html>
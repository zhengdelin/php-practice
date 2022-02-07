<?php
$link = new mysqli('localhost', "root", "A1234567", 'library');
if (!$link) {
    echo '連接失敗';
    exit;
}
$edit_id = isset($_POST['bookid']) ? $_POST['bookid'] : '';
// bookid as 書號,booktitle as 書名,bookprice as 書價,bookauthor as 作者
$result = $link->query("select * from books where bookid='$edit_id'");
$data = $result->fetch_assoc();


?>
<html>

<head>
    <!--  -->
    <title>edit--<?php echo $edit_id; ?></title>
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

            if (document.forms['edit']['bookauthor'].value == '') {
                document.forms['edit']['bookauthor'].value = '匿名';
            }
            if (document.forms['edit']['booktitle'].value == '') {
                alert('書名不可為空!');
                return false;
            } else {
                return confirm('您確定要儲存嗎？') ? true : false;
            }
        }
    </script>
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class='d-flex flex-column align-items-center'>
        <form action='controller.php' method='POST' class='m-0' name='edit' onsubmit="return check()">
            <table border='1' class='text-center'>
                <tr>
                    <td colspan="2">
                        <label for="bookid">書號:<?php echo $edit_id ?></label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="booktitle">書名:</label>
                        <input type="text" name="booktitle" id="booktitle" value="<?php echo $data['booktitle'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="bookprice">書價:</label>
                        <input type="text" name="bookprice" id="bookprice" value="<?php echo $data['bookprice'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="bookauthor">作者:</label>
                        <input type="text" name="bookauthor" id="bookauthor" value="<?php echo $data['bookauthor'] ?>">
                    </td>
                </tr>
                <tr colspan="2">
                    <td>

                        <input type="button" name="cancel" value="取消" onclick="location.href='index.php?Pages=<?php echo $_POST['Pages'] ?>'" />
                    </td>
                    <td>
                        <input type="submit" value="儲存">
                    </td>
                </tr>
                <input type="hidden" name="bookid" value="<?php echo $edit_id; ?>">
                <input type="hidden" name="Pages" value="<?php echo $_POST['Pages'] ?>">
                <input type="hidden" name="action" value="edit">

            </table>
        </form>
    </div>

</body>

</html>
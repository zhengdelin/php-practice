<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>1110734020form</title>
    <style type="text/css">
        * {
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }
        input.s{
            width:1.2rem;
            height: 1.2rem;
        }
    </style>
</head>

<body>
    <form method="POST" action="/practice/20211117-4.php">
        <input type="hidden" name="user" value="<?php echo isset($_POST['user']) ? $_POST['user'] : 'user' ?>">
        <input type="hidden" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '0000' ?>">
        <input type="hidden" name="occupation" value="<?php echo isset($_POST['occupation']) ? $_POST['occupation'] : 'none' ?>">
        <input type="hidden" name="birthday" value="<?php echo isset($_POST['birthday']) ? $_POST['birthday'] : '2000-01-01' ?>">
        <label>興趣:</label>
        <label><input class="s" type="checkbox" name="int[]" value="看書">看書</label>
        <label><input class="s" type="checkbox" name="int[]" value="寫字">寫字</label>
        <label><input class="s" type="checkbox" name="int[]" value="聽音樂">聽音樂</label>
        <label><input class="s" type="checkbox" name="int[]" value="跑步">跑步</label><br>
        <input type="submit" value="下一步">
    </form>
</body>

</html>
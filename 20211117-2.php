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
    </style>
</head>

<body>
    <form method="POST" action="/practice/20211117-3.php">
        <input type="hidden" name="user" value="<?php echo isset($_POST['user']) ? $_POST['user'] : 'user' ?>">
        <input type="hidden" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '0000' ?>">
        <label>職業:</label>
        <select name="occupation">
            <option value="student" selected="true">學生</option>
            <option value="teacher">老師</option>
            <option value="soldier">軍人</option>
            <option value="doctor">醫生</option>
        </select><br>
        <label>生日:<br><input type="date" name="birthday"></label><br>
        <input type="submit" value="下一步">
    </form>
</body>

</html>
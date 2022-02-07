<html>

<head>

</head>

<body>
    <?php
    class book
    {
        public $bookid;
        public $booktitle;
        public $bookauthor;
        public $bookprice;
        public $link;
        function __construct()
        {
            $this->link = new mysqli('localhost', "root", "A1234567", 'library');
            if (!$this->link) {
                echo '連接失敗';
                exit;
            }
        }
        function getbook($bookid)
        {
            
            $result=$this->link->query("select bookid,booktitle,bookprice,bookauthor from books where bookid='$bookid'");
            while($r=$result->fetch_assoc()){
                $this->bookid=$r['bookid'];
                $this->booktitle=$r['booktitle'];
                $this->bookprice=$r['bookprice'];
                $this->bookauthor=$r['bookauthor'];
            }
        }
        function showbook()
        {
            echo "書號:$this->bookid<br>";
            echo "書名:$this->booktitle<br>";
            echo "書價:$this->bookprice<br>";
            echo "作者:$this->bookauthor<br>";
        }
    }
    $a = new book;
    $a->getbook($_GET['bookid']);
    $a->showbook();
    ?>

</body>

</html>
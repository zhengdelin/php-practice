<?php
$stdname = ["張晴平", "陳于學", "林書瑋", "陳依杰", "陳逸明", "鄭琬婷", "宋俊吉", "陳偉彥", "洪嘉齊", "陳千慧", "鄭曼茂", "蔡寧枝", "曾文君", "林韋成", "張揚威", "江秀慧", "李禹勳", "林堅宇", "李雅堯", "李俊傑"];
$email = ["p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "aa", "ab", "ac", "ad", "ae", "af", "ag", "ah", "ai"];
$d = ["財務金融系", "商業設計系", "應用英語系"];
$link = new mysqli('localhost', "root", "", 'games');
if (!$link) {
    echo '連接失敗';
    exit;
}
// for ($i = 30; $i < 35; $i++) {
//     $id = $i + 1;
//     $n = $stdname[$i - 15];
//     $e = $email[$i - 15] . '123@gmail.com';
//     $dd = $d[rand(0, 2)];
//     $sql = "INSERT INTO student VALUES('$id','$n','$e','$dd');";
//     $link->query($sql);
//     echo $sql . '<br>';
// }


$i = 0;
// $bool = array_fill(0, 30, 0);
$stu = [];
//(1)	查詢資訊管理系有哪些學生參加比賽，並顯示比賽資訊、學生資訊
// $result = $link->query("select * from student");
// while ($r = $result->fetch_assoc()) {
//     if ($r['dName'] == '資訊管理系') {
//         $id = $r['sId'];
//         $result2 = $link->query("select * from formteam where sId='$id'");
//         while ($k = $result2->fetch_assoc()) {
//             $tId=$k['tId'];
//             $result3 = $link->query("select * from tgame where tId='$tId'");
//             $h = $result3->fetch_assoc();
//             $s[] = array_merge($r,  $k,$h);
//         }
//     }
// }
//(2)	查詢羽球單打有哪些人參加，並顯示學生資訊
// $result = $link->query("select * from formteam");
// while ($r = $result->fetch_assoc()) {
//     $tId = $r['tId'];
//     if ($tId == 't04') {
//         $id = $r['sId'];
//         $result2 = $link->query("select * from student where sId='$id'");
//         $k = $result2->fetch_assoc();
//         $s[] = array_merge($k,$r);
//     }
// }
//(3)	查詢財務金融系有哪些隊伍代表參加羽球雙打比賽，並顯示隊伍成員資訊
// $result = $link->query("select * from team");
// while ($r = $result->fetch_assoc()) {
//     $dName = $r['dName'];
//     if ($dName == '財務金融系') {
//         $tNo = $r['tNo'];
//         $result2 = $link->query("select * from formteam where tNo='$tNo' && tId='t03'");
//         while($k = $result2->fetch_assoc()){
//             $s[] = array_merge($r,$k);
//         }
//     }
// }
//(4)	查詢資訊工程系有哪些學生，並顯示學生的個人資訊及該系的資訊
// $result = $link->query("select * from student");
// while ($r = $result->fetch_assoc()) {
//     $dName=$r['dName'];
//     if ($dName == '資訊工程系') {
//         $result2 = $link->query("select * from department where dName='$dName'");
//         $k = $result2->fetch_assoc();
//         $result3 = $link->query("select * from depphone where dName='$dName'");
//         $h = $result3->fetch_assoc();   
//         $s[] = array_merge($r,$k,$h);
//     }
// }
//(5)	查詢V3隊伍組成，並顯示比賽資訊、學生資訊
// $result = $link->query("select * from formteam");
// while ($r = $result->fetch_assoc()) {
//     if ($r['tNo'] == 'V3') {
//         $tId=$r['tId'];$sId=$r['sId'];
//         $result2 = $link->query("select * from tgame where tId='$tId'");
//         $k = $result2->fetch_assoc();
//         $result3 = $link->query("select * from student where sId='$sId'");
//         $h = $result3->fetch_assoc();
//         $s[] = array_merge($h,$r,$k);
//     }
// } 
//(6)	查詢哪些學生沒有報名比賽
// $result = $link->query("select * from student");
// while ($r = $result->fetch_assoc()) {
//     $id = $r['sId'];
//     $result2 = $link->query("select * from formteam where sId='$id'");
//     if(!$result2->fetch_assoc()){
//         $s[] = array_merge($r);
//     }      
// }
//(7)	查詢哪個科系有最多代表隊伍參加比賽，並顯示隊伍成員資訊、比賽資訊
// $count = [];
// $max = ['count' => 0, 'name' => ''];
// $result = $link->query("select * from team");
// while ($r = $result->fetch_assoc()) {
//     $dName = $r['dName'];
//     $count[$dName] = array_key_exists($dName, $count) ? $count[$dName]++ : 1;
//     if ($count[$dName] > $max['count']) {
//         $max['count'] = $count[$dName];
//         $max['name'] = $dName;
//     }
// }
// $name = $max['name'];
// $result2 = $link->query("select * from team where dName='$name'");
// while ($k = $result2->fetch_assoc()) {
//     $tNo=$k['tNo'];
//     $tId=$k['tId'];
//     $result3=$link->query("select * from formteam where tNo='$tNo'");
//     $result4=$link->query("select * from tgame where tId='$tId'");
//     $z=$result4->fetch_assoc();
//     while($h=$result3->fetch_assoc()){
//         $sId=$h['sId'];
//         // $result5=$link->query("select * from student where sId='$sId'");
//         // $x=$result5->fetch_assoc();
//         $s[] = array_merge($h,$k,$z);
//     }
// }

//(8)	查詢哪個科系有最多學生參加比賽，並顯示學生的隊伍、比賽資訊
// $count = [];
// $max = ['count' => 0, 'dName' => ''];
// $result = $link->query("select * from formteam");
// while ($r = $result->fetch_assoc()) {
//     $sId = $r['sId'];
//     $k = $link->query("select * from student where sId='$sId'")->fetch_assoc();
//     $count[$k['dName']]=array_key_exists($k['dName'],$count)?++$count[$k['dName']]:1;
//     if ($count[$k['dName']] > $max['count']) {
//         $max['count'] = $count[$k['dName']];
//         $max['dName'] = $k['dName'];
//     }
// }
// $dName = $max['dName'];
// $result = $link->query("select * from formteam");
// while ($r = $result->fetch_assoc()) {
//     $sId = $r['sId'];
//     $k = $link->query("select * from student where sId='$sId'")->fetch_assoc();
//     if ($k['dName']==$dName) {
//         $tId=$r['tId'];
//         $h = $link->query("select * from tgame where tId='$tId'")->fetch_assoc();
//         $s[]=array_merge($k,['tNo'=>$r['tNo']],$h);
//     }
// }

//(9)	查詢哪個學生報名最多比賽，並顯示比賽資訊
// $count = [];
// $max = ['count' => 0, 'sId' => ''];
// $result = $link->query("select * from formteam");
// while ($r = $result->fetch_assoc()) {
//     $sId = $r['sId'];
//     // if(array_key_exists($sId,$count)){
//     //     $count[$sId]++;
//     // }else{
//     //     $count[$sId]=1;
//     // }
//     $count[$sId]=array_key_exists($sId,$count)?++$count[$sId]:1;
//     if ($count[$sId] > $max['count']) {
//         $max['count'] = $count[$sId];
//         $max['sId'] = $sId;
//     }
// }
// $sId = $max['sId'];
// $result2 = $link->query("select * from formteam where sId='$sId'");
// while ($k = $result2->fetch_assoc()) {
//     $tId=$k['tId'];
//     $result4=$link->query("select * from tgame where tId='$tId'");
//     $z=$result4->fetch_assoc();
//         // $result5=$link->query("select * from student where sId='$sId'");
//         // $x=$result5->fetch_assoc();
//     $s[] = array_merge($k,$z);
// }
$result = $link->query("select * from team");
while ($r = $result->fetch_assoc()) {
    if(substr($r['dateT'],5,2)=='11'){
        $tId=$r['tId'];
        $tNo=$r['tNo'];
        $result2 = $link->query("select * from formteam where tNo='$tNo'");
        $h = $link->query("select * from tgame where tId='$tId'")->fetch_assoc();
        while($k=$result2->fetch_assoc()){
            $s[]=array_merge($r,$k,$h);
        }
    }
}



foreach (array_keys($s[0]) as $j) {
    print("$j,");
}
echo '<br>';
foreach ($s as $i) {
    foreach (array_keys($i) as $j) {
        print("$i[$j],");
    }
    echo '<br>';
}
echo '<br><hr><br>';
$s = [];

// foreach ($stu as $i) {
//     $id = $i['sId'];
//     $result2 = $link->query("select * from formteam where sId='$id'");
//     while ($r = $result2->fetch_assoc()) {
//         $s[] = array_merge($i, $r);
//     }
// }
// foreach ($s as $i) {
//     foreach (array_keys($i) as $j) {
//         print("$j: $i[$j]  ");
//     }
//     echo '<br>';
// }

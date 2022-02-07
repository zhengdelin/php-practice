<?php
echo "<form method='POST'>";
echo "<label>收件者<input type='text' name='to' autofocus></label><br>";
echo "<label>收件者<input type='text' name='to' autofocus></label><br></form>";
if(mail("s1110734020@nutc.edu.tw", "20號", "20號", "From: s1110734020@nutc.edu.tw")){
    echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
}else{
    echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息  
};


        
        
    
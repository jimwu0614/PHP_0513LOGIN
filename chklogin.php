<?php
$default_acc='123';
$default_pw='321';

$acc=$_POST['acc'];
$pw=$_POST['pw'];

if ($acc==$default_acc && $pw==$default_pw) {
    echo "帳號密碼正確";
} else {
    echo "帳號密碼錯誤"; 
    echo "<br>";
    echo "<a href='login.php'>回上一頁</a>";

    
}

?>
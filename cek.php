<?php
include "database.php"; 

$input = file_get_contents("php://input");
$data = json_decode($input);

if(isset($data->username)){
    
    $username = mysqli_real_escape_string($db, $data->username);
    
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($db, $sql);
    
    if(mysqli_num_rows($result) > 0){
echo "<span style='color: red;'>❌ sudah dipakai</span>";    
   
    }
else {
echo "<span style='color: green;'>✅ tersedia</span>";}
}
?>
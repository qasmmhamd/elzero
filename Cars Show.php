<?php
function printt($ID,$val){
    $dsn='localhost';
    $user='root';
    $pass='';
    $dbname="cars_show";
    $conn=mysqli_connect($dsn,$user,$pass,$dbname);
    if(!$conn){
        die("فشل الاتصال:".mysqli_connect_error());
    }
    $sql="SELECT $val from `cars` WHERE`id`LIKE'$ID%';
    ";
    $reault=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($reault);
    echo$row[$val];
    /*if(mysqli_num_rows($reault)>0){
        $row=mysqli_fetch_assoc($reault);
        echo$row[$val];
    }else{
        echo "لا يوجد السعر";}*/
    
    mysqli_close($conn);}




    
    printt(2,"price");
    
    
    



?>
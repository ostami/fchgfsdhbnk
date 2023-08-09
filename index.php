<?php
    $u1=$_POST["a1"];
    $u2=$_POST["a2"];
    $u3=$_POST["a3"];
    $u4=$_POST["a4"];
    $u5=$_POST["a5"];
    $u6=$_POST["a6"];
    $u7=$_POST["a7"];
    $u8=$_POST["a8"];
    $u9=$_POST["a9"];
    $u10=$_POST["a10"];
    
    
    $user="gigfa_34708530";
    $password="123456";
    $host="sql309.gigfa.com";
    $db_name="gigfa_34708530_erryttuyyyu";
    $con =mysqli_connect($host,$user,$password,$db_name,"3306");
    $sql="insert into a (id,z,x,c,v,b,n,m,s,d) VALUES ($u1,$u2,$u3,$u4,$u5,$u6,$u7,$u8,$u9,$u10)"; 
    $sql="insert into a (id,z,x,c,v,b,n,m,s,d) VALUES ('u11','u2','u3','u4','u5','u6','u7','u8','u9','u10')"; 
    
    if (mysqli_query($con,$sql)){
        echo "ok";
    }else{
         echo "no";
    }
?>
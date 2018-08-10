<?php
	
    $con=new mysqli("localhost","root","","morningbatch");
    
    $emp_name = $_POST["emp_name"];
    $emp_add  = $_POST["emp_add"];
    $emp_mob  =  $_POST["emp_mob"];
    
  $query = "insert into tblemp(emp_name,emp_add,emp_mob)values('$emp_name','$emp_add','$emp_mob')";
  $con->query($query);
  
    echo "sucess";
    

    
?>


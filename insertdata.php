<?php
	
    $con=new mysqli("localhost","root","","morningbatch");
    
    $emp_name = $_REQUEST["emp_name"];
    $emp_add  = $_REQUEST["emp_add"];
    $emp_mob  =  $_REQUEST["emp_mob"];
    
  $query = "insert into tblemp(emp_name,emp_add,emp_mob)values('$emp_name','$emp_add','$emp_mob')";
  $con->query($query);
  
    echo "sucess";
    

    
?>


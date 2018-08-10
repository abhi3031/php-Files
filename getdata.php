<?php
	
    
    $con=new mysqli("localhost","root","","Morningbatch");
    $qu = "select * from tblemp";
    $rows = $con->query($qu);
    while($row = $rows->fetch_assoc())
    {
        $pp[]  = $row;
        
    }
    echo json_encode($pp);
?>

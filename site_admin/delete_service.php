<?php
if(isset($_POST['deleted_id']) )
{$slider_id = $_POST['deleted_id'];

$sql = "delete from service where id  = $slider_id";
require "connect_database.php" ;
if($conn->query($sql))
{
    echo "success";
}
    else
    {
        echo "error";
    }
}
else
echo "failed";



?>
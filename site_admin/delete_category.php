<?php
if(isset($_POST['id_delete']) )
{$id = $_POST['id_delete'];

$sql = "delete from category where id  = $id";
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
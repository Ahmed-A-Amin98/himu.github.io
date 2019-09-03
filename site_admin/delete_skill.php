<?php
if(isset($_POST['deleted_id']) )
{$skill_id = $_POST['deleted_id'];

$sql = "delete from skill where id  = $skill_id";
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
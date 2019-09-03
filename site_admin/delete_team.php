<?php
if(isset($_POST['deleted_id']) )
{$team_id = $_POST['deleted_id'];

$sql = "delete from team where id  = $team_id";
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
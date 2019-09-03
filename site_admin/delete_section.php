<?php
if(isset($_POST['deleted_section_id']) )
{$section_id = $_POST['deleted_section_id'];

$sql = "delete from section where id  = $section_id";
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
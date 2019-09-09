<?php
if(isset($_POST['name_add']) )
{
$Name =$_POST['name_add'];

    require 'connect_database.php' ;
    $sql = "insert into category (`name`) VALUES('$Name')";

    if($conn->query($sql))
    {
        echo "success";
    }
        else
        {
            echo "error";
        }

}
else echo "fail";
?>
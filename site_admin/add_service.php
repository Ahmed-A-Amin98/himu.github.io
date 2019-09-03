<?php
if( isset($_POST['title_add']) && isset($_POST['desc_add'])&& isset($_POST['icon_add']) )
{
$title =$_POST['title_add'];
$desc =$_POST['desc_add'];
$icon =$_POST['icon_add'];


    require 'connect_database.php' ;
    $sql = "insert into service (`title`,`description`,`icon`) VALUES('$title','$desc','$icon')";

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
<?php
if( isset($_POST['title']) && isset($_POST['description']) && isset($_POST['section_name']) )
{
$title =$_POST['title'];
$description =$_POST['description'];
$section_name =$_POST['section_name'];

    require 'connect_database.php' ;
    $sql = "insert into section (`title`,`description`,`section_name`) VALUES('$title','$description','$section_name')";

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
<?php
if(isset($_POST['Name']) && isset($_POST['skill_value']) )
{
$Name =$_POST['Name'];
$skill_value =$_POST['skill_value'];

    require 'connect_database.php' ;
    $sql = "insert into skill (`Name`,`skill_value`) VALUES('$Name','$skill_value')";

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
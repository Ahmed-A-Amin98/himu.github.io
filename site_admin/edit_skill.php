<?php
if(isset($_POST['edited_id']) && isset($_POST['edited_Name']) && isset($_POST['edited_skill_value']) )
{
    $edited_id = $_POST['edited_id'];
    $edited_Name = $_POST['edited_Name'];
    $edited_skill_value = $_POST['edited_skill_value'];

    require 'connect_database.php' ;
    $sql = "update  skill set `Name`='$edited_Name', `skill_value`='$edited_skill_value' where `id` ='$edited_id'";

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

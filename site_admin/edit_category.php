<?php
if(isset($_POST['id_edit']) && isset($_POST['name_edit']))
{
    $edited_id = $_POST['id_edit'];
    $edited_Name = $_POST['name_edit'];

    require 'connect_database.php' ;
    $sql = "update  category set `name`='$edited_Name' where `id` ='$edited_id'";

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

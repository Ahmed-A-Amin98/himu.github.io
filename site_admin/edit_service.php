<?php
if(isset($_POST['id_edit']) && isset($_POST['title_edit']) && isset($_POST['desc_edit']) && isset($_POST['icon_edit']) )
{
    $edited_id = $_POST['id_edit'];
    $edited_title = $_POST['title_edit'];
    $edited_desc = $_POST['desc_edit'];
    $edited_icon= $_POST['icon_edit'];


    require 'connect_database.php' ;
    $sql = "update  service set `title`='$edited_title', `description`='$edited_desc', `icon`='$edited_icon' where `id` ='$edited_id'";

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
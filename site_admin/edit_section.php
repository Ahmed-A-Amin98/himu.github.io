<?php
if(isset($_POST['edited_section_id']) && isset($_POST['edited_title']) && isset($_POST['edited_description']) && isset($_POST['edited_section_name'])  && isset($_FILES['edited_img'])  )
{
    $edited_id = $_POST['edited_section_id'];
    $edited_title = $_POST['edited_title'];
    $edited_description = $_POST['edited_description'];
    $edited_section_name = $_POST['edited_section_name'];


  


    require 'connect_database.php' ;

    $sql = "update  section set `title`='$edited_title', `description`='$edited_description', `section_name`='$edited_section_name' where `id` ='$edited_id'";
    
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

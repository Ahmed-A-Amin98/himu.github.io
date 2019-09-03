<?php
if(isset($_POST['id_edit']) && isset($_POST['name_edit']) && isset($_POST['desc_edit']) && isset($_POST['pos_edit']) && isset($_FILES['img_edit']) )
{
    $edited_id = $_POST['id_edit'];
    $edited_name = $_POST['name_edit'];
    $edited_desc = $_POST['desc_edit'];
    $edited_pos = $_POST['pos_edit'];
    $team_img= $_FILES['img_edit'];

    $errors =array();
$file_name =$_FILES["img_edit"]["name"];
$file_size =$_FILES["img_edit"]["size"];
$file_tmp =$_FILES["img_edit"]["tmp_name"];
$file_type =$_FILES["img_edit"]["type"];
$x = explode(".",$file_name);
$file_ext=strtolower(end($x));

$extensions= array("jpeg" ,"jpg" ,"png");
if(in_array($file_ext,$extensions)===false)
if($file_size >2097152)
{$errors[]="File size must be less than 2MB";}

    move_uploaded_file($file_tmp, "../course_site/images/our-team/".$file_name);

    require 'connect_database.php' ;
    if(empty($file_name)==true)
    $sql = "update  team set `name`='$edited_name', `description`='$edited_desc', `position`='$edited_pos' where `id` ='$edited_id'";
else
    $sql = "update  team set `name`='$edited_name', `description`='$edited_desc',`img`='$file_name',`position`='$edited_pos' where `id` ='$edited_id'";

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

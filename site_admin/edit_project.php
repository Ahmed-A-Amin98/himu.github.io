<?php
if(isset($_POST['id_edit']) && isset($_POST['title_edit']) && isset($_POST['desc_edit']) && isset($_FILES['img_edit']) )
{
    $edited_id = $_POST['id_edit'];
    $edited_title = $_POST['title_edit'];
    $edited_desc = $_POST['desc_edit'];
    $slider_img= $_FILES['img_edit'];

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

    move_uploaded_file($file_tmp, "../course_site/images/slider/".$file_name);

    require 'connect_database.php' ;
    if(empty($file_name)==true)
    $sql = "update  portfolio set `title`='$edited_title', `description`='$edited_desc' where `id` ='$edited_id'";
else
    $sql = "update  portfolio set `title`='$edited_title', `description`='$edited_desc',`img`='$file_name' where `id` ='$edited_id'";

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

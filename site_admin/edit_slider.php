<?php
if(isset($_POST['edited_id']) && isset($_POST['edited_title']) && isset($_POST['edited_desc']) && isset($_FILES['edited_img']) )
{
    $edited_id = $_POST['edited_id'];
    $edited_title = $_POST['edited_title'];
    $edited_desc = $_POST['edited_desc'];
    $slider_img= $_FILES['edited_img'];

    $errors =array();
$file_name =$_FILES["edited_img"]["name"];
$file_size =$_FILES["edited_img"]["size"];
$file_tmp =$_FILES["edited_img"]["tmp_name"];
$file_type =$_FILES["edited_img"]["type"];
$x = explode(".",$file_name);
$file_ext=strtolower(end($x));

$extensions= array("jpeg" ,"jpg" ,"png");
if(in_array($file_ext,$extensions)===false)
if($file_size >2097152)
{$errors[]="File size must be less than 2MB";}

    move_uploaded_file($file_tmp, "../course_site/images/slider/".$file_name);

    require 'connect_database.php' ;
    if(empty($file_name)==true)
    $sql = "update  slider set `title`='$edited_title', `description`='$edited_desc' where `id` ='$edited_id'";
else
    $sql = "update  slider set `title`='$edited_title', `description`='$edited_desc',`img`='$file_name' where `id` ='$edited_id'";

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

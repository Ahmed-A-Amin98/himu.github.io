<?php
if(isset($_FILES['img_add']) && isset($_POST['title_add']) && isset($_POST['desc_add']) )
{
$title =$_POST['title_add'];
$desc =$_POST['desc_add'];

$errors =array();
$file_name =$_FILES["img_add"]["name"];
$file_size =$_FILES["img_add"]["size"];
$file_tmp =$_FILES["img_add"]["tmp_name"];
$file_type =$_FILES["img_add"]["type"];
$x = explode(".",$file_name);
$file_ext=strtolower(end($x));

$extensions= array("jpeg" ,"jpg" ,"png");
if(in_array($file_ext,$extensions)===false)
{$errors[]="extention not allowed please choose a proper extention";}
if($file_size >2097152)
{$errors[]="File size must be less than 2MB";}

if(empty($errors)){
    move_uploaded_file($file_tmp, "../course_site/images/portfolio/".$file_name);

    require 'connect_database.php' ;
    $sql = "insert into portfolio (`title`,`description`,`img`) VALUES('$title','$desc','$file_name')";

    if($conn->query($sql))
    {
        echo "success";
    }
        else
        {
            echo "error";
        }
}
}
else echo "fail";
?>
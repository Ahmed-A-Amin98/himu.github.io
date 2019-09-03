<?php
if(isset($_FILES['img_slider']) && isset($_POST['title']) && isset($_POST['desc']) )
{
$title =$_POST['title'];
$desc =$_POST['desc'];


$errors =array();
$file_name =$_FILES["img_slider"]["name"];
$file_size =$_FILES["img_slider"]["size"];
$file_tmp =$_FILES["img_slider"]["tmp_name"];
$file_type =$_FILES["img_slider"]["type"];
$x = explode(".",$file_name);
$file_ext=strtolower(end($x));

$extensions= array("jpeg" ,"jpg" ,"png");
if(in_array($file_ext,$extensions)===false)
{$errors[]="extention not allowed please choose a proper extention";}
if($file_size >2097152)
{$errors[]="File size must be less than 2MB";}

if(empty($errors)){
    move_uploaded_file($file_tmp, "../course_site/images/slider/".$file_name);

    require 'connect_database.php' ;
    $sql = "insert into slider (`title`,`description`,`img`) VALUES('$title','$desc','$file_name')";

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
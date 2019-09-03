<?php
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) )
{
$name =$_POST['name'];
$email =$_POST['email'];
$message =$_POST['message'];

require '../site_admin/connect_database.php';
$sql = "insert into contact_us (`name`,`email`,`message`) VALUES('$name','$email','$message')";

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
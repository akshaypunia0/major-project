<?php
include "dbconnect.php";



$userfile=$_FILES['s_image']['name'];
$targetfile="satyamimage/".$userfile;
$move=move_uploaded_file($_FILES['s_image']['tmp_name'],$targetfile);
if($move)
{
$sql="insert into image(img_path) values ('$targetfile')";

$result=$conn->query($sql);
if($result)
{
header("Location:image1.php?upload=yes");
}
else
{
header("Location:image1.php?upload=no");
}

}

else
{
echo $conn->error;
}
?>
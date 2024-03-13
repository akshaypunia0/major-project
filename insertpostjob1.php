<?php
include "dbconnect.php";


if(isset($_POST) && !empty($_POST))
{
$title=$_POST['title'];
$company_name=$_POST['company'];
$email=$_POST['email'];
$vacancy=$_POST['vacancy'];
$qual=$_POST['qualification'];
$country=$_POST['country'];
$state=$_POST['state'];
$exp_min=$_POST['Emin'];
$exp_max=$_POST['Emax'];
$sal_min=$_POST['Smin'];
$sal_max=$_POST['Smax'];
$jobtype=$_POST['Jtype'];
$role=$_POST['role'];
$mobile_no=$_POST['mobile_no'];
$city=$_POST['city'];
$description=$_POST['desc'];





if(!($_FILES['dfile']['name']=="")) {
	  
	$sql1="insert into postjobid()values()";
    $result=$conn->query($sql1);
	$id=$conn->insert_id;
	
	print_r($_FILES);
	
	
	$a=0;
    $allowed_types =array('doc','docx','rtf','pdf');
    $userFile = $id.$_FILES['dfile']['name'];
    $error = null;

    // Get the file extension
    $extension = pathinfo($userFile, PATHINFO_EXTENSION);

    // Search the array for the allowed file type

    if (in_array($extension, $allowed_types, false) != true) 
	{

        $a=1;
		//$error = "ERROR: ILLEGAL FILE TYPE";
        //echo $error; // or use  exit;
    }
    if($a==0)
	{
		$targetfile= "postjob/".$userFile;
        $move= move_uploaded_file($_FILES['dfile']['tmp_name'],$targetfile);
        if ($move)
            {
	
	              echo "file uploaded successfully";
	
            }
        else
           {
	           echo "unable to upload file";
	
            }
	}	
    if($a==1)
	{
		$error = "ERROR: ILLEGAL FILE TYPE";
        echo $error; // or use  exit;
		header("Location:postrequirement1.php?ufile=n");
		exit;
	}	
   
   }

   $sql="INSERT INTO `postjob`(`Title`, `Company_name`,`Email`,`Vacancy`,`Qualification`, `Country`, `State`,`Exp_min`, `Exp_max`, `sal_min`, `Sal_max`, `Job_type`, `Role`, `Mobile_no`, `City`, `Description`,Desc_file)
 VALUES('$title','$company_name','$email','$vacancy','$qual','$country','$state','$exp_min','$exp_max','$sal_min','$sal_max','$jobtype','$role','$mobile_no','$city','$description','$targetfile')";

   if($conn->query($sql))
{
	$subject="Mail from $company_name";
	//$header="From: $email";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$email."\r\n".
	
	$msg="<b>Job Title:</b> $title<br>";
	$msg.="<b>Company Name/Owner Name:</b> $company_name<br>";
	$msg.="<b>Number Of vacancy:</b> $vacancy<br>";
	$msg.="<b>Email:</b> $email<br>";
	$msg.="<b>Qualification required:</b> $qual<br>";
	$msg.="<b>Country:</b> $country<br>";
	$msg.="<b>State:</b> $state<br>";
	$msg.="<b>City:</b> $city<br>";
	$msg.="<b>Experience:</b> $exp_min-$exp_max years<br>";
	$msg.="<b>Monthly Salary:</b> ".$sal_min."-".$sal_max."<br>";
	$msg.="<b>Job Type:</b> $jobtype<br>";
	$msg.="<b>Role:</b> $role";
	$msg.="<b>Mobile No.:</b> $mobile_no<br>";
	$msg.="<b>Description:</b> $description";
	
	
	//echo exit;
	mail("vshkr@gmail.com",$subject,$msg,$header);
	header("Location:postrequirement1.php?success=y");
}
else
{
	echo"unsucessful";
	$conn->error;
}
   
   
   
   }


?>
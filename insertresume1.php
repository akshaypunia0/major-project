<?php
include "dbconnect.php";

if(isset($_POST) && !empty($_POST))
{
	$title=$_POST['title'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$mobile=$_POST['mobile_no'];
	$edu=$_POST['Edu'];
    $exp_in_months=$_POST['exp_in_months'];
	$exp_in_years=$_POST['exp_in_years'];
	$sal_lakhs=$_POST['lakhs'];
	$sal_thousand=$_POST['Thousands'];
	$keyskills=$_POST['keyskill'];
	
	/*$sql="INSERT INTO `resume`(`Name`, `Gender`, `Email-id`, `Country`, `City`, `Mobile_no`, `Edu_basic`, `Edu_pg`, `Edu_doc`, `Work_exp_y`, `Work_exp_m`, `sal_lakhs`, `sal_thousand`, `Keyskills`) VALUES('$name','$gender','$email','$country','$city','$mobile','$edu_ug','$edu_pg','$edu_doc','$exp_in_months','$exp_in_years','$sal_lakhs','$sal_thousand','$keyskills')";*/
	
	
    $sql="insert into exid()values()";
    $result=$conn->query($sql);
	$id=$conn->insert_id;

	
	if(!($_FILES['rfile']['name']=="")) {
	  
	//print_r($_FILES);
	
	$a=0;
    $allowed_types =array('doc','docx','rtf','pdf');
    $userFile = $id.$_FILES['rfile']['name'];
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
		$GLOBALS['targetfile1']= "resume/".$userFile;
        $move= move_uploaded_file($_FILES['rfile']['tmp_name'],$GLOBALS['targetfile1']);
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
		header("Location:resume.php?ufile=n");
		exit;
	}	
   
  }
  
  if(!($_FILES['rphoto']['name']=="")) {
	  
	//print_r($_FILES);
	
	$b=0;
    $allowed_types =array('jpg','png','jpeg','gif');
    $userFile =$id.$_FILES['rphoto']['name'];
    $error = null;

    // Get the file extension
    $extension = pathinfo($userFile, PATHINFO_EXTENSION);

    // Search the array for the allowed file type

    if (in_array($extension, $allowed_types, false) != true) 
	{

        $b=1;
		//$error = "ERROR: ILLEGAL FILE TYPE";
        //echo $error; // or use  exit;
    }
    if($b==0)
	{
		$targetfile= "photo/".$userFile;
        $move= move_uploaded_file($_FILES['rphoto']['tmp_name'],$targetfile);
        if ($move)
            {
	
	              echo "photo uploaded successfully";
				
	
            }
        else
           {
	           echo "unable to upload file";
	
            }
	}	
    if($b==1)
	{
		$error = "ERROR: ILLEGAL FILE TYPE";
        echo $error; // or use  exit;
		header("Location:postresume1.php?uphoto=n");
		exit;
	}	
   
  }
	
	
	
	
	$sql="INSERT INTO `resume`(`Title`,`Name`, `Gender`, `Email-id`, `Country`,`State`, `City`, `Mobile_no`, `Edu_basic`,`Work_exp_y`, `Work_exp_m`, `sal_lakhs`, `sal_thousand`, `Keyskills`,`Resume`,`Photo`) VALUES('$title','$name','$gender','$email','$country','$state','$city','$mobile','$edu','$exp_in_years','$exp_in_months','$sal_lakhs','$sal_thousand','$keyskills','$targetfile1','$targetfile')";
	
	
	
	if($conn->query($sql))
	{
	$subject="$name Have uploaded Resume";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$email."\r\n".
	
	//$header="From:$email";
	$msg="<b>Name:</b> $name<br>";
	$msg.="<b>Gender:</b> $gender<br>";
	$msg.="<b>Email:</b> $email<br>";
	$msg.="<b>Country:</b> $country<br>";
	$msg.="<b>State:</b> $state<br>";
	$msg.="<b>City:</b> $city<br>";
	$msg.="<b>Mobile No.:</b> $mobile<br>";
	$msg.="<b>Experience:</b> $exp_in_years - $exp_in_months<br>";
	$msg.="<b>Annual salary:</b> $sal_lakhs lac and $sal_thousand thousand<br>";
	$msg.="<b>Keyskils:</b> $keyskills<br>";
	
	
	header("Location:postresume1.php?success=y");
	}
	else
	{
		$conn->error;
	}
	
	
	}
?>
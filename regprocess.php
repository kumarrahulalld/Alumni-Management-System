<?php
session_start();
include("conn.php");

    if(isset($_POST['regsubmit']))
    {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $email =$_POST['email'];
    $dob =$_POST['dob'];
    $yop =$_POST['year_of_passing'];
    $degree =$_POST['degree'];
    $work =$_POST['work'];
    $co =$_POST['co'];
    $pwd=$_POST['pwd'];
    $pwdcnf=$_POST['pwdcnf'];
    $jp ="N/A";
    $facebook =$_POST['facebook'];
    $twitter =$_POST['twitter'];
    $linkedin =$_POST['linkedin'];
    $moment =$_POST['moment'];
    $status="NO";
    $image= $_FILES['image']['name'];
	$image_tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp,"img/$image");
    $insert="select email from registration where email='$email'";
    $res=mysqli_query($conn,$insert);
    $row=mysqli_fetch_row($res);
    if($row)
    {
       echo "<script>alert('You are already Registered. Thank you!')</script>";
	   echo "<script>window.open('index.php','_self')</script>"; 
    }
    else
    {
        if($pwd==$pwdcnf)
        {
	$insert = "insert into registration(fname,lname,gender,mobile,email,dob,yop,degree,work,co,jp,moment,image,facebook,twitter,linkedin,status,password)values ('$fname','$lname','$gender','$mobile','$email','$dob','$yop','$degree','$work','$co','$jp','".$_POST['moment']."','$image','$facebook','$twitter','$linkedin','$status','$pwd')";
	if(mysqli_query($conn,$insert))
    {
		echo "<script>alert('Details saved successfuly')</script>";
	    echo "<script>window.open('index.php','_self')</script>";
	}
    else 
        echo "".mysqli_error($conn);
    }
        else
        {
           echo "<script>alert('Password is not matching in both fiels.')</script>"; 
            echo "<script>window.open('regform.php','_self')</script>";
        }
    }
}
    else if(isset($_POST['upsubmit']))
    {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $email =$_POST['email'];
    $dob =$_POST['dob'];
    $yop =$_POST['year_of_passing'];
    $degree =$_POST['degree'];
    $work =$_POST['work'];
    $co =$_POST['co'];
    $jp ="N/A";
    $facebook =$_POST['facebook'];
    $twitter =$_POST['twitter'];
    $linkedin =$_POST['linkedin'];
    $moment =$_POST['moment'];
    $status="NO";
    $image= $_FILES['image']['name'];
    if($image!=null)
    {
	   $image_tmp=$_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp,"img/$image");
    }
    else
        $image=$_SESSION["previmg"];
    $insert = "update registration set fname='$fname',lname='$lname',gender='$gender',mobile='$mobile',email='$email',dob='$dob',yop='$yop',degree='$degree',work='$work',co='$co',jp='$jp',moment='".$_POST['moment']."',image='$image',facebook='$facebook',twitter='$twitter',linkedin='$linkedin',status='$status' where email='".$_SESSION["updatemail"]."';";
	if(mysqli_query($conn,$insert))
    {
		echo "<script>alert('Details saved successfuly')</script>";
	    echo "<script>window.open('index.php','_self')</script>";
	}
    else 
        echo "".mysqli_error($conn);
    }

    else if(isset($_POST['feedsubmit']))    
    {
    $name=$_POST['name']; 
    $email =$_POST['email'];
    $subject=$_POST['subject'];
    $moment =$_POST['moment'];
    $comtype=$_POST['comtype'];
    $insert = "insert into feedback(name,email,moment,subject,comtype)values('$name','$email','".$_POST['moment']."','$subject','$comtype')";
	if(mysqli_query($conn,$insert))
    {
        echo "<script>alert('Feedback/Query saved successfuly')</script>";
        include "email.php";
        $mail->addAddress("kumarrahul.allduniv@gmail.com",$name);
        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'];
        $mail->Body ="NAME:-  ".$_POST['name']."  EMAIL-ID:-  ".$_POST['email']."Type ".$comtype."   MESSAGE:-   ". $_POST['moment'];
        $mail->AltBody = "This is the plain text version of the email content";
        if(!$mail->send()) 
            echo "<script>alert('Mailer Error: '".$mail->ErrorInfo."');</script>";
        else 
            echo "<script>alert('Message has been sent successfully');</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else 
        echo "eRROR occured".mysqli_error($conn);
}
    else if(isset($_POST['eventsubmit'])) 
    {
        $subject=$_POST['subject']; 
        $place=$_POST['place'];
        $date=$_POST['date'];
        $pass = $_POST['pass'];
        $image= $_FILES['image']['name'];
        $image_tmp=$_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp,"img/$image");
        $pass1="unixccft";
        if(strcmp($pass,$pass1) == 0)
        {
            $insert = "insert into event(subject,place,date,describes,image)values('$subject','$place','$date','".$_POST['desc']."','$image')";
	        if(mysqli_query($conn,$insert))
            {
                echo "<script>alert('Event Added Successfully')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
            else 
                echo"".mysqli_error($conn);
        }
        else
        {
            echo "<script>alert('Unauthorized Access Try Again!!!!!')</script>";
            echo "<script>window.open('event.php','_self')</script>";
        }
    }
    else if(isset($_POST['logsubmit'])) 
    {
        $pass=$_POST['pass'];
        $log="CCE@2k18";
        $pass1="cceIPS@2018";
        if(strcmp($pass,$pass1) == 0)
        {
                $_SESSION["method"]="POST";
                echo "<script>alert('Login Successful!')</script>";
                echo "<script>window.open('admin/adpanel.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Unauthorized Access Try Again!!!!!')</script>";
            echo "<script>window.open('admin.php','_self')</script>";
        }
    }
    else if(isset($_POST['add'])) 
    {
            $insert = "UPDATE registration SET status='YES' where email='".$_SESSION["em"]."'";
	        if(mysqli_query($conn,$insert))
            {
                $_SESSION["method"]="POST";
                echo "<script>alert('Alumni Added Successfully')</script>";
                echo "<script>window.open('admin/adpanel.php','_self')</script>";
            }
            else 
                echo"".mysqli_error($conn);
    }
else if(isset($_POST['forpasssubmit'])) 
    {
        $_SESSION["updatemail"]=$_POST['email'];
        $sql="select * from registration where email='".$_POST['email']."'";
        $row=mysqli_query($conn,$sql);
        $result=mysqli_fetch_array($row);
        if($row)
        { 
        $email =$_POST['email'];
        include "email.php";
        $mail->addAddress("kumarrahul.allduniv@gmail.com",$email);
        $mail->isHTML(true);
        $mail->Subject = "Password Recovery Alumini CCE";
        $mail->Body ="Your Password is :-".$result['password'];
        $mail->AltBody = "This is the plain text version of the email content";
        if(!$mail->send()) 
            echo "<script>alert('Mailer Error: '".$mail->ErrorInfo."');</script>";
        else 
        {
            echo "<script>alert('Password Has Been Sent to your Registered Email Address!')</script>";
            echo "<script>window.open('updateinfo.php','_self')</script>";
        }
}
        else
        {
            echo "<script>alert('Details not Find Try Again!!!!!')</script>";
            echo "<script>window.open('forpass.php','_self')</script>";
        }
}
else if(isset($_POST['starsubmit'])) 
    {
        $desig=$_POST['desig']; 
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $year_of_passing = $_POST['year_of_passing'];
    $degree=$_POST['degree'];
    $co=$_POST['co'];
    $desig=$_POST['desig'];
    $moment=$_POST['moment'];
        $image= $_FILES['image']['name'];
        $image_tmp=$_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp,"img/$image");
            $insert = "insert into performer(fname,lname,year_of_passing,degree,co,desig,moment,image)values('$fname','$lname','$year_of_passing','$degree','$co','$desig','$moment','$image')";
	        if(mysqli_query($conn,$insert))
            {
                echo "<script>alert('Top Performer Added Successfully')</script>";
                echo "<script>window.open('../adpanel.php','_self')</script>";
            }
            else 
                echo"".mysqli_error($conn);
    }
else if(isset($_POST['orgsubmit'])) 
    {
        $fname=$_POST['fname'];
        $co=$_POST['co'];
        $query="select fname from organisation where fname='".$fname."'";
        $res=mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($res);
        if($row)
        {
          $insert = "update organisation set co='.$co.' where fname='.$fname.'";
	        if(mysqli_query($conn,$insert))
            {
                echo "<script>alert('Organisation Already Exist So Updated Placements.')</script>";
                echo "<script>window.open('../adpanel.php','_self')</script>";
            }
            else 
                echo"".mysqli_error($conn);  
        }
        else
        {
        
            $image= $_FILES['image']['name'];
            $image_tmp=$_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp,"img/$image");
            $insert = "insert into organisation(fname,co,image)values('$fname','$co','$image')";
	        if(mysqli_query($conn,$insert))
            {
                echo "<script>alert('Placement Details Added Successfully')</script>";
                echo "<script>window.open('../adpanel.php','_self')</script>";
            }
            else 
                echo"".mysqli_error($conn);
        }
    }
    else if(isset($_POST['updatereg'])) 
    {   
        
        $insert = "UPDATE updatevol SET status='YES' where email='".$_SESSION["updatem"]."'";
	    if(mysqli_query($conn,$insert))
        {   
            $query="select * from updatevol where email='".$_SESSION["updatem"]."'";
            $res=mysqli_query($conn,$query);
            $row=mysqli_fetch_assoc($res);
            if($row)
            {
                $insert = "UPDATE registration SET fname='".$row['fname']."',lname='".$row['lname']."',co='".$row['co']."',image='".$row['image']."',dob='".$row['dob']."',degree='".$row['degree']."',yop='".$row['yop']."',mobile='".$row['mobile']."',email='".$row['email']."',facebook='".$row['facebook']."',twitter='".$row['twitter']."',linkedin='".$row['linkedin']."',status='YES' where email='".$_SESSION["updatemail"]."'";
                if(mysqli_query($conn,$insert))
                {
                    
                     $insert="delete from updatevol where email='".$_SESSION["updatem"]."'";
                    if(mysqli_query($conn,$insert))
                    {
                        $_SESSION["method"]="POST";
                        echo "<script>alert('Alumni Added Successfully')</script>";
                        echo "<script>window.open('admin/adpanel.php','_self')</script>";
                    }
                    else 
                        echo"".mysqli_error($conn);
                }
                else 
                    echo"".mysqli_error($conn);
               
            }
        }
          else 
                echo"".mysqli_error($conn);
     }
    
    else if(isset($_POST['remove'])) 
    {
            $email=$_SESSION["em"];
            $insert = 'DELETE FROM registration WHERE email="'.$email.'"';
	        if(mysqli_query($conn,$insert))
            {
                $_SESSION["method"]="POST";
                echo "<script>alert('Alumni deleted successfully.')</script>";
                echo "<script>window.open('admin/adpanel.php','_self')</script>";
            }
            else 
                echo"".mysqli_error($conn);
        }
    else
        echo "form not submitted correctly";


mysqli_close($conn);

?>

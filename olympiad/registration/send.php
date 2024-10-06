<?php

//varible setting
 $name= $_REQUEST['name'];
 $district = $_REQUEST['district'];
$room = $_REQUEST['room'];
$phonenumber = $_REQUEST['phone_number'];
$email = $_REQUEST['email'];
$section = $_REQUEST['section'];
$roll = $_REQUEST['roll'];
$time= $_REQUEST['criteria'];
 $subject = "New Biology Olympiad Registration Form!";

 $to ="ibrahimhostelndcm@gmail.com";  // change receiving email id 
 
 $content = "Name : ". $name. "\r\nDistrict: ". $district. "\r\nHostel Room No. : ". $room. "\r\nPhone Number : ". $phonenumber. "\r\nEmail : ". $email.
 "\r\nSection: ". $section. 
 "\r\nCollege Roll: ". $roll.
 "\r\nDo You Wanna Work with us?: ". $criteria;
 
 // name [break] email [break] message
 


// check input fields
if ( empty($name)|| empty($district)|| empty($room)|| empty($phonenumber)|| empty($section)|| empty($roll)|| empty($criteria)   )
{
echo"<script type='text/javascript'>alert('Opps! Something went wrong! Please fill all the required fields with correctly. Then click Submit');
    window.history.go(-1);
    </script>";
}
else 
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Done! 👋 Your form submitted succesfully! Your Registration to Biology Olympiad is Confirmed. Study more and more!');
    window.history.go(-1);
    </script>";
}




?>
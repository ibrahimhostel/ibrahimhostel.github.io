/* Copyright © by Muhammad Erag Goshih, iErTA */

<?php
//varible setting
 $name= $_REQUEST['name'];
 $address = $_REQUEST['address'];
$country = $_REQUEST['country'];
$phonenumber = $_REQUEST['phone_number'];
$email = $_REQUEST['email'];
$religion = $_REQUEST['religion'];
$gender = $_REQUEST['gender'];
$language= $_REQUEST['language'];
$help = $_REQUEST['help'];
$criteria = $_REQUEST['criteria'];
 $subject = "iErTA Aid";

 $to ="iertaofficial@gmail.com";  // change receiving email id 
 
 $content = "Name : ". $name. "\r\nAddress : ". $address. "\r\nCountry : ". $country. "\r\nPhone Number : ". $phonenumber. "\r\nEmail : ". $email. "\r\nReligion: ". $religion. "\r\nGender: ". $gender. "\r\nLanguage: ". $language. "\r\nHelp: ". $help. "\r\nCriteria: ". $criteria; // name [break] email [break] message
 


// check input fields
if ( empty($name)|| empty($address)|| empty($country)|| empty($phonenumber)|| empty($religion)|| empty($gender)|| empty($language)|| empty($help)|| empty($criteria) )
{
echo"<script type='text/javascript'>alert('Opps! Something went wrong! Please fill all the required fields with correctly. Then click Submit');
    window.history.go(-1);
    </script>";
}
else 
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Done! 👋 Your form submitted succesfully! Please wait, we will contact you soon, insha-Allah ');
    window.history.go(-2);
    </script>";
}


?>
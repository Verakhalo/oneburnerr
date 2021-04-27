<?php
$error = NULL;
if(isset($_POST['submit'])){
  //Get form data
  $username =$_POST['username'];
  $email =$_POST['email'];
  $password =$_POST['password'];
  $password2 =$_POST['password2'];

  if(strlen($username) < 5){
     $error="<p>Your username must be atleast 5 characters</p>";
  }
  elseif($password2 != $password){
    $error .= "<p>Passwords does not match</p>";
  }
  else{
    //Form is valid
    //Connect to the database
    $mysqli = NEW MySQLi('localhost','root','','oneburner');
    
}
  
    //Sanitize for data
   $username = $mysqli->real_escape_string($username); 
   $email = $mysqli->real_escape_string($email); 
   $password = $mysqli->real_escape_string($password); 
   $password2 = $mysqli->real_escape_string($password2);
   
   //Generate vkey
   $vkey = md5(time() .$username);

   //Insert account into the database
   $password =md5($password);
   $insert = $mysqli->query("INSERT INTO userinfo(username,password,email,vkey)
   values('$username','$password','$email','$vkey')");

   if($insert){
     //Send Email
     $to =$email;
     $subject = "Email verification";
     $message ="<a href='http://localhost/registration/verify.php?vkey=$vkey'>Register Account</a>";
     $headers = "From: ikhalo.oseaghe@gmail.com";

   }
   else{
     echo $mysqli->error;
   }
}

?>
<?php 

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "No connection";
}
mysqli_select_db($con,'oneburner');

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$compname = $_POST['compname'];
$compproduct = $_POST['compproduct'];
$help = $_POST['help'];

$query = " insert into userinfodata (lastname, firstname, email, phone, product, compname, compproduct, help)
values ('$lastname', '$firstname', '$email', '$phone', '$product', '$compname', '$compproduct', '$help') ";

echo "$query";

mysqli_query($con,$query);

header("location:seventh.php");

?>
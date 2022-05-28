<?php



$con = mysqli_connect("localhost","root","","test");

if(!$con)
{
  echo 'Connection problems';
}
else
{
  echo 'Ok';
}


if(isset($_POST['submit'])){
$date = $_POST['requestDate'];
$name=$_POST['firstName'];
$lname = $_POST['lastName'];


$query = "insert into info (date,name,lname) values ('$date','$name','$lname')";

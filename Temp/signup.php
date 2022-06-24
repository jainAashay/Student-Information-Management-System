<?php
$server="localhost";
$username="root";
$passward="";
$database="login_data";
$con = mysqli_connect($server,$username,$passward,$database);
if(! $con )
{
  die('Could not connect: ' . mysqli_error());
}
$st_name=$_POST['st_name'];
$sc_no=$_POST['sc_no'];
$father_name=$_POST['father_name'];
$mother_name=$_POST['mother_name'];
$Degree=$_POST['Degree'];
$Branch=$_POST['Branch'];


$sql="INSERT INTO `student_info` ( `Student_Name`, `Scholar_No`, `Father's_Name`, `Mother's_Name`, `Degree`, `Branch`) VALUES ( '$st_name', '$sc_no', '$father_name', '$mother_name', '$Degree', '$Branch')";
$result=mysqli_query($con,$sql);


if($result)
{
  header('Location:y.html');
}
else{
  header('Location: Z.html');
}
?>
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
$sql="SELECT * FROM `login-data`";
$result=mysqli_query($con,$sql);

$p=0;
while($row=mysqli_fetch_assoc($result))
{
      if($row['Username']==$_POST['username'] && $row['Passward']==$_POST['passward'])
      {
        header('Location: Add_account.html');
        $p=1;
        break;
      }
}
if($p==0)
{
   header('Location: x.html');
}
?>
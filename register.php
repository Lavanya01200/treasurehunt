<?php
session_start();
$servername = "elitmus123.000webhostapp.com";
$username = "id20616350_elitmus01200";
$password ="Lavanya@01200";
$dbname="id20616350_elitmus123";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if( !$connection)
die("connection not established".mysqli_connect_error());
else
echo "connected succsusfully";
if(isset($_POST['Signup']))
{
   $fname=$_POST['name'];
   $email=$_POST['email'];
   $pass = $_POST['password'];
   $uname=$_POST['username'];
   $contact=$_POST['contact'];
   $dob=$_POST['dob'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];

    $sql = "INSERT INTO users (full_name,user_name,user_email,user_pass,contact,d_o_b,age,gender)
     VALUES ('$fname','$uname','$email','$pass','$contact','$dob','$age','$gender')";
     if (mysqli_query($connection, $sql)) {
        echo "New record has been added successfully !";
        $sql1="INSERT INTO attempts(user_name,count,round) VALUES ('$uname',0,0)";
        $res=mysqli_query($connection, $sql1);
        header('location: login.html');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($connection);

}
else
echo "all fields  required";

?>
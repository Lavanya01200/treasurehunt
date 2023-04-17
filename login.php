<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = $_POST["name"];
        $pwd=$_POST["pwd"];


        $servername = "elitmus123.000webhostapp.com";
                $username = "id20616350_elitmus01200";
                $password ="Lavanya@01200";
                $dbname="id20616350_elitmus123";


        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if ($conn) {
            echo "Connection successful.";
        }
        else{
            echo "Connection Failed.";
            die("Connection Failed:".mysqli_connect_error());
        }
        $sql = "select * from users where user_name='$uname' and user_pass='$pwd'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
          echo "Successful Login";
          $data=mysqli_fetch_assoc($res);
          $_SESSION['fname']=$data['full_name'];
           $_SESSION['uname']=$uname;
           $_SESSION['pwd']=$pwd;
           $_SESSION['status']=1;
           header('Location:play.php');

        }

        else{
?>
            <script>alert('Invalid credentials');</script>
            <?php
            header('Location:home.html');
        }
}
?>

<?php 
                session_start();
                $servername = "localhost";
                $username = "root";
                $password ="";
                $dbname="thunt";
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                $uname=$_SESSION['uname'];
                $sql="select * from attempts where user_name='$uname'";
                $res=mysqli_query($conn,$sql);
                $data=mysqli_fetch_assoc($res);
                $count=$data['count']+1;
                $round=0;
                $sql="update attempts set count='$count',round='$round' where user_name='$uname'";
                $res=mysqli_query($conn, $sql);
                header('Location:end.html');
?>
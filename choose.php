<?php 
                session_start();
                $servername = "elitmus123.000webhostapp.com";
                $username = "id20616350_elitmus01200";
                $password ="Lavanya@01200";
                $dbname="id20616350_elitmus123";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                $uname=$_SESSION['uname'];
                $sql="select * from attempts where user_name='$uname'";
                $res=mysqli_query($conn,$sql);
                $data=mysqli_fetch_assoc($res);
                $round=$data['round'];
                if($round==0){
                    header('Location:clue1.html');
                }
                else if($round==1)
                {
                    header('Location:clue2.html');
                }
                else if($round==2)
                {
                    header('Location:clue3.html');
                }
                else if($round==3)
                {
                    header('Location:clue4.html');
                }
                else if($round==4)
                {
                    header('Location:clue5.html');
                }
                else{
                    header('Location:win.html');
                }
                
?>
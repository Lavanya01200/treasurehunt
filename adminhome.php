<?php
    session_start();
    if($_SESSION['status']==0){
        header('location: login.html');
    }
    $dbcon=mysqli_connect("localhost","root","");  
    mysqli_select_db($dbcon,"thunt");
    $uname=$_SESSION['uname'];
    $sql="SELECT * FROM attempts ORDER BY count,round DESC";
    $result = mysqli_query($dbcon,$sql);
    $count=1;
?>
<html>
    <head>
        <title>Rounds</title>
        <style>
            body{
                background-image:url(clueback.jpeg);
                background-repeat: no-repeat;
                background-size: cover;    
            }
          .header{
            width:100%;
            height:100px;
            background-color:rgb(54, 121, 121);
            color:whitesmoke;
            margin:0px;
           

          }
          h1{
           padding-left:600px;

          }
          h3{
           padding-left:700px;
           margin-top:0px;
            color:floralwhite;
          }
          .hey{
            margin-top:30px;
            margin-left:0px;
          }
          .btn1{
            position:relative;
            top:0%;
            margin-top:40px;
            margin-left:1300px;
            -webkit-border-radius: 38;
            -moz-border-radius: 38;
            border-radius: 38px;
            text-shadow: 4px 3px 6px #a3a3a3;
            -webkit-box-shadow: 5px 3px 5px #828282;
            -moz-box-shadow: 5px 3px 5px #828282;
            box-shadow: 5px 3px 5px #828282;
            font-family: Arial;
            color: #ffffff;
            font-size: 26px;
            padding: 15px;
            border-style: none;
            background: rgb(54, 121, 121);
            text-decoration: none;
          }
          .btn1:hover {
            background:#7dcbd4;
            text-decoration: none;
          }
          .tab{
            margin-left:580px;
        
          }
          .th{
            font-size: 20px;
            background-color:white;
            color:rgb(54, 121, 121);
            font-family: sans-serif;
            font-weight: bold;

          }
        </style>
        
    </head>
    <body>
        <div class="header">
           <h1><strong>TREASURE Hunt!!!</strong></h1>
           <h3>Wander around the places</h3>
           <a href="logout.php"><button class="btn1" style="cursor:pointer">Logout</button></a>
        </div>
        <div class="hey">
            <h1><strong>WELCOME Admin !!! </strong></h1>
         </div>
         <table class="tab" cellspacing=0px cellpadding=10px border=1px border-style=solid>
            <tr>
                <th class="th">Rank</th>
                <th class="th">Username</th>
                <th class="th">Total Attempts</th>
                <th class="th">Current Round</th>
                <th class="th">IQ %</th>
            </tr>
            <?php
        while($data = mysqli_fetch_assoc($result))
            { ?>
            <tr>
                <td class="th"><?php echo $count; $count=$count+1;?></td>
                <td class="th"><?php echo $data['user_name']?></td>
                <td class="th"><?php echo $data['count']?></td>
                <td class="th"><?php echo $data['round']?></td>
                <td class="th"><?php echo (500/($data['count']))?></td>
            </tr>
          <?php } ?>
         </table>
    </body>
 </html>       
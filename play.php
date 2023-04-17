<?php 
session_start();
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
          .frm{
            border-style: none;
            border-color:cadetblue;
           
            margin-top:50px;
            margin-left:550px;
            width:400px;
            height:400px;
            
          }
          .we{
            margin-left:85px;
          }
          .hey{
            margin-top:100px;
            margin-left:0px;
          }
          .btn{
            margin-top:40px;
            margin-left:650px;
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
            padding: 24px;
            border-style: none;
            background: rgb(54, 121, 121);
            text-decoration: none;
          }
          .btn:hover {
            background: #7dcbd4;
            text-decoration: none;
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
          .acc1{
            position:relative;
            margin-left:1400px;
            top:-70%;
          }
          .i{
            width:40px;
            height:40px;
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
           <h1><strong>WELCOME <?php echo $_SESSION['fname']?> !!! </strong></h1>
          

        </div>
        <a href="choose.php">
            <button class="btn">Start game...</button>
          </a>
    </body>

<!DOCTYPE html>
  <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruserlt</title>
</head>
<style>
  *{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    }
    body{
    background:linear-gradient(to right , rgb(219, 95, 192), rgb(161, 74, 189) );
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    color: rgb(197, 161, 230);
    text-align: center;
    width: 100%;
    max-width: 600px;
    margin: auto;
    }
    button{
    background: transparent;
    border: 2px solid white;
    border-radius: 50px;
    cursor: pointer;
    font-weight: 700;
    transition: all 300ms ease;
    background:white;
    color:  rgb(197, 161, 230);
    width: 100px;
    height: 50px;
    }

    button:hover{
    background: rgb(197, 161, 230);
    color: white;
    }

  </style>
    <body>


  <form action="RobotControlPanel.php" method="get">
          <br>       <br>    <br>       <br>    <br> 
          <?php
            $conn = new mysqli("localhost", "root", "", "panel");
            if(isset($_GET['Forward']))
            {
                echo'<h1 > F </h1>';
                $sql = "insert into control values('F')";
                $conn->query($sql);
            }


            else if(isset($_GET['Stop']))
            {
                echo'<h1> S </h1>';
                $sql = "insert into control values('S')";
                $conn->query($sql);
            }

            else if(isset($_GET['Backward']))
            {
                echo'<h1> B </h1>';
                $sql = "insert into control values('B')";
                $conn->query($sql);
            }

            else if(isset($_GET['Right']))
            {
                echo'<h1> R </h1>';
                $sql = "insert into control values('R')";
                $conn->query($sql);
            }

            else if(isset($_GET['Left']))
            {
                echo'<h1> L </h1>';
                $sql = "insert into control values('L')";
                $conn->query($sql);
            }
            else if(isset($_GET['Stop']))
            {
                echo "<h1>stop</h1>";
                $sql = "insert into control values('stop')";
                $conn->query($sql);
            }
            $run=mysqli_query($conn,$sql)

            ?>
          <button class= "Back" name="Back" id="Back">Back</button>
      </form>

  </body>
  <!-- © Copyright 2022 - Written By Manar -->
  </html>








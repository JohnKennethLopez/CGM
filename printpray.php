<?php
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:admin.php");
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGM</title>
    <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
    <link rel="stylesheet" href="css/printpray.css" media="all">
    <link rel="stylesheet" href="css/print.css" media="print">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    
    <section id="Attendancelist">
        <div class="header">
            <div class="lgg"><img class="lg" src="logo.png" alt=""></div>
            <div class="cgmm"><h1 class="cgm">Church of God's Miracles</h1></div>
        </div>
    
        <div class="labas">
            <div class="print">
                <div class="inn">
                    <button onclick="window.print()" class="printbtn">PRINT  <i class="fa-solid fa-print"></i></button>
                    <button class="printbtn"><a href="admin2.php">BACK</a></button>
                </div>
            </div>
        </div>
            
        <div class="table">
            <div class="tablehead"><h1>Prayer Requests &<br> Answered Prayers List</h1></div>
            <table class="tablecont">
                <tr>
                    <th>CGM CHAPTER</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PRAY REQUESTS</th>
                    <th>ANSWERED PRAYERS</th>
                </tr>
                <?php
                    include('cgmdbconnection.php');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM prayer order by id desc";
                    $query_run = mysqli_query($con,$query);
                    $check_pray = mysqli_num_rows($query_run) > 0; 
                    if($check_pray){
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <tr>
                    <td class="official_id" hidden ><?php echo $row['id']?></td>
                        <td><?php echo $row['cgmchapter']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['request']?></td>
                        <td><?php echo $row['report']?></td>
                    </td>
                        
                    </tr>
                    <?php
                        }
                        } else{
                            echo " No Prayer Request & Prayer Reports Found!";
                        }
                    

                ?>
            </table>
        </div>
        <?php 
                include('cgmdbconnection.php');

                $count_query = $count_query = mysqli_query($con, "SELECT COUNT(*) AS total FROM prayer");
                $row_count = mysqli_fetch_assoc($count_query);
                $count = $row_count['total'];
            ?>
            <div class="totalattend">
                <h1 class="total">Total of Prayer Request & Prayer Reports: <?php echo $count; ?></h1>
            </div>
    </section>
</body>
</html>
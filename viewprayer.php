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
    <link rel="stylesheet" href="css/viewprayerreq.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <section id="admin">
        <div class="dashb">
            <div class="adlogo">
                <h1 class="CGMh1"><img class="logo" src="logo.png" alt=""><br>CHURCH<br>OF GOD'S <br>MIRACLES<br></h1>
            </div>
            <div class="addash">
                    <br><h1 class="cgmadmin">CGM <br>ADMIN</h1><br><br>
                    <div class="inner">
                        <div class="dashnav">
                            <p class="btn"><a href="uploadevent.php">Upload Events</a></p>
                            <p class="btn"><a href="appointment.php">View Appointment</a><p>
                            <p class="btn"><a href="viewprayer.php">View Prayer Requests</a><p>
                            <p class="btn"><a href="attendance.php">Attendance</a><p>
                            <p class="btn"><a href="attendancelist.php">View Attendance List</a><p>
                        </div>
                    </div>
            </div>
        </div>
        <button class="logout"><a href="logout.php">Logout</a></button>
                <hr />
                <h1 class="prayer">Prayer Requests &<br> Answered Prayers</h1>
    </section>
    <section id="prayerReq">
        <div class="filter">
            <div class="inn">
                <p class="backbtn"><a href="searchpray.php">Search a <br>CGM CHAPTER</a></p>
            </div>
        </div>
        <div class="table">
            <table class="tablecont">
                <tr>
                    <th>CGM CHAPTER</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PRAY REQUESTS</th>
                    <th>ANSWERED PRAYERS</th>
                    <th class="DE">DELETE</th>
                </tr>
                <?php
                    $con = new mysqli('localhost','root','','cgm');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM prayer";
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
                        <td><input type="hidden" class="delete_id_value " value="<?php echo $row['id']?>">
                    <a href="javascript:void(0)" class="delete_btn_ajax delete-btn">Delete</a>
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
    </section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
<script>
    $('.delete_btn_ajax').click(function(e){
        e.preventDefault();

        var deleteid = $(this).closest("tr").find('.delete_id_value').val();
        console.log(deleteid);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this Data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "deletepray.php",
                    data: {
                        "delete_btn_set": 1,
                        "delete_id": deleteid,
                    },
                    success: function(response) {

                        swal("Data Deleted Successfully!", {
                                icon: "success",
                            }).then((result) => {
                                location.reload();
                            });
                    }
                });
            }
            });
    })
</script>

<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
    ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status-code']; ?>",
            confirmButtonColor: "#020049",
            confirmButtonText: "Ok",

            });
    </script>
    <?php
    unset($_SESSION['status']);
}
?>


